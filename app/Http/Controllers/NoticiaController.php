<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Foto;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NoticiaController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        // dd($noticias);

        return view('dashboard.noticia.index', compact('noticias'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all();

        return view('dashboard.noticia.create', compact('categorias', 'etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'titulo' => ['required', 'unique:noticias,titulo'],
            'extracto' => 'required',
            'contenido' => 'required',
            'etiquetas' => 'required',
            'foto' => 'required',
        ]);

        

        $noticia = new Noticia();
        $noticia->titulo = $request->get('titulo');
        // $noticia->url = Str::slug($request->get('titulo'));
        $noticia->extracto = $request->get('extracto');
        $noticia->contenido = $request->get('contenido');
        $noticia->fecha_publicacion = $request->has('fecha_publicacion') ? Carbon::parse($request->get('fecha_publicacion')) : null;
        $noticia->categoria_id = Categoria::find($cat = $request->get('categoria')) ? $cat : Categoria::create(['nombre' => $cat])->id;
        $noticia->save();

        // Para guardar la etiqeutas en BD
        $etiquetas = [];
        foreach( $request->get('etiquetas') as $etiqueta )
        {
            $etiquetas[] = Etiqueta::find($etiqueta) 
                                    ? $etiqueta 
                                    : Etiqueta::create(['nombre' => $etiqueta])->id; 
        }

        $noticia->etiquetas()->attach($etiquetas);

        //obtenemos el campo file definido en el formulario
        $foto = request()->file('foto')->store('public/'.$request->titulo);

        $img = Foto::create([
            'url' => Storage::url($foto),
            'noticia_id' => $noticia->id
        ]);

        // optimización de la imagen
        $image = Image::make(Storage::get($foto))
                        ->widen(600)
                        // ->limitColors(255)
                        ->encode();

        // se reemplaza la imagen que subio el usuario por la imagen optimizada
        Storage::put($img->url, (string) $image);

        return redirect('/noticias')->with('flash', 'Tu publicación ha sido creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Noticia $noticia )
    {
        // $noticia = Noticia::find($noticia);
        // dd($noticia);
        $categorias = Categoria::all();
        
        return view('ukmedik_web.blogdetail', compact('noticia', 'categorias')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        
        $categorias = Categoria::all();
        $etiquetas = Etiqueta::all();

        return view('dashboard.noticia.edit', compact('noticia','categorias','etiquetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id)
    {
        
        // $this->validate($request, [
        //     'titulo' => 'required',
        //     'extracto' => 'required',
        //     'contenido' => 'required',
        //     'etiquetas' => 'required',
        //     ]);
        
        $noticia = Noticia::find($id);
        $noticia->titulo = $request->get('titulo');
        // $noticia->url = Str::slug($request->get('titulo'));
        $noticia->extracto = $request->get('extracto');
        $noticia->contenido = $request->get('contenido');
        $noticia->fecha_publicacion = $request->has('fecha_publicacion') ? Carbon::parse($request->get('fecha_publicacion')) : null;
        $noticia->categoria_id = Categoria::find($cat = $request->get('categoria')) ? $cat : Categoria::create(['nombre' => $cat])->id;
        $noticia->save();

        // Para guardar la etiquetas en BD
        $etiquetas = [];
        foreach( $request->get('etiquetas') as $etiqueta )
        {
            $etiquetas[] = Etiqueta::find($etiqueta) 
                                    ? $etiqueta 
                                    : Etiqueta::create(['nombre' => $etiqueta])->id; 
        }

        $noticia->etiquetas()->sync($etiquetas);
        
        return redirect('/noticias')->with('flash', 'Tu publicación ha sido editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::findOrfail($id);

        Storage::delete($noticia->fotos);
        
        $noticia->etiquetas()->detach();
        
        $noticia->delete();
        
        return redirect('/noticias')->with('flash', 'La noticia ha sido eliminada');
    }
}
