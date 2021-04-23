<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Foto;
use Illuminate\Support\Facades\Storage;

class FotosController extends Controller
{
    public function store(Noticia $noticia)
    {
        $this->validate(request(), [
            'foto' => 'image|max:2048'
        ]);

        //obtenemos el campo file definido en el formulario
        $foto = request()->file('file')->store('public/noticias/'.$noticia->titulo);

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

        // return Storage::url($fotoUrl);
    }

    public function destroy(Foto $foto) 
    {
       
        $foto->delete();

        $fotoRuta = str_replace('storage', 'public', $foto->url);
        
        Storage::delete($fotoRuta);


        return back()->with('flash', 'Foto eliminada');
    }
}
