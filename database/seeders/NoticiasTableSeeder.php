<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Etiqueta;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::truncate();
        Categoria::truncate();

        $categoria = new Categoria;
        $categoria->nombre = "Categoria 01";
        $categoria->save();

        $categoria = new Categoria;
        $categoria->nombre = "Categoria 02";
        $categoria->save();

        $categoria = new Categoria;
        $categoria->nombre = "Categoria 03";
        $categoria->save();

        $noticia = new Noticia;
        $noticia->titulo = "titilo 01";
        $noticia->url = Str::slug("titulo 01");
        $noticia->extracto = "extracto01";
        $noticia->contenido = "<p>contenido01</p>";
        $noticia->fecha_publicacion = Carbon::now()->subDays(5);
        $noticia->categoria_id = '3';
        $noticia->save();

        // $noticia->etiquetas->attach(Etiqueta::create(['nombre' => 'etiqeuta 01']));
        
        $noticia = new Noticia;
        $noticia->titulo = "titilo 02";
        $noticia->url = Str::slug("titulo 02");
        $noticia->extracto = "extracto02";
        $noticia->contenido = "<p>contenido02</p>";
        $noticia->fecha_publicacion = Carbon::now()->subDays(4);
        $noticia->categoria_id = '1';
        $noticia->save();

        // $noticia->etiquetas->attach(Etiqueta::create(['nombre' => 'etiqeuta 02']));
        
        $noticia = new Noticia;
        $noticia->titulo = "titulo 03";
        $noticia->url = Str::slug("titulo 03");
        $noticia->extracto = "extracto03";
        $noticia->contenido = "<p>contenido03</p>";
        $noticia->fecha_publicacion = Carbon::now()->subDays(3);
        $noticia->categoria_id = '2';
        $noticia->save();

        // $noticia->etiquetas->attach(Etiqueta::create(['nombre' => 'etiqeuta 03']));
        
        $noticia = new Noticia;
        $noticia->titulo = "titulo 04";
        $noticia->url = Str::slug("titulo 04");
        $noticia->extracto = "extracto04";
        $noticia->contenido = "<p>contenido04</p>";
        $noticia->fecha_publicacion = Carbon::now()->subDays(1);
        $noticia->categoria_id = '3';
        $noticia->save();

        // $noticia->etiquetas->attach(Etiqueta::create(['nombre' => 'etiqeuta 04']));

    }
}
