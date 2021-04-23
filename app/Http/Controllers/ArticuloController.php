<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Currency;
use App\Traits\ManageCart;

class ArticuloController extends Controller
{
    use ManageCart;

    public function __construct(){
        $this->middleware('auth')->except(['show', 'showCart', 'addArticuloToCart', 'removeArticuloFromCart']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $articulos = Articulo::all();

        return view('dashboard.articulo.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.articulo.create');
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
            'codigo' => ['required', 'unique:articulos,titulo'],
            'titulo' => 'required',
            'subtitulo' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'imagen' => 'image|max:2048',
        ]);
    
        $imagen = request()->file('imagen')->store('public/articulos/'.$request->titulo);

        $articulo = Articulo::create([
            'codigo' => $request->get('codigo'),
            'titulo' => $request->get('titulo'),
            'subtitulo' => $request->get('subtitulo'),
            'descripcion' => $request->get('descripcion'),
            'cantidad' => $request->get('cantidad'),
            'precio' => $request->get('precio'),
            'imagen' => Storage::url($imagen),
            ]);


        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        // $articulo = Articulo::findOrfail();
        // dd($articulo);
        $articulos = Articulo::orderBy('id', 'ASC')->paginate(3);
        $categorias = Categoria::all();  


        return view('ukmedik_web.shopdetail', compact('articulo','articulos','categorias')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('dashboard.articulo.edit', compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $articulo = Articulo::find($id);

        if ($request->hasFile('imagen')){
            // Se elimina la imagen del evento actual
            Storage::delete($articulo->file);

            $imagen = request()->file('imagen')->store('eventos/'.$request->title);

            // se actualiza el evento en la base da datos
            $evento->update([
                'codigo' => $request->get('codigo'),
                'titulo' => $request->get('titulo'),
                'subtitulo' => $request->get('subtitulo'),
                'descripcion' => $request->get('descripcion'),
                'cantidad' => $request->get('cantidad'),
                'precio' => $request->get('precio'),
                'imagen' => $imagen,
                
             ]);
        }

        $articulo->codigo = $request->get('codigo');
        $articulo->titulo = $request->get('titulo');
        $articulo->subtitulo = $request->get('subtitulo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');

        $articulo->save();

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::findOrfail($id);

        Storage::delete($articulo->imagen);

        $articulo->delete();

        return redirect('/articulos');
    }
}
