<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Noticia;
use Illuminate\Support\Str;

class Categoria extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function noticias()
    {
        return $this->hasMany(Noticia::class);
    }

 
    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = $nombre;
        $this->attributes['url'] = Str::slug($nombre);
    }
}
