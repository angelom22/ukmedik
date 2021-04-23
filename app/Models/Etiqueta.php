<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Noticia;

class Etiqueta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function noticias()
    {
        return $this->belongsToMany(Noticia::class);
    }

    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = $nombre;
        $this->attributes['url'] = Str::slug($nombre);
    }
}
