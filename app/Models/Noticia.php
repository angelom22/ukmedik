<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Etiqueta;
use App\Models\Foto;
use Carbon\Carbon;
use Illuminate\Support\Str;


class Noticia extends Model
{
    use HasFactory;
    
    protected $dates = ['fecha_publicacion'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class);
    }

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

    public function scopePublished($query)
    {
        $query->WhereNotNull('fecha_publicacion')
                ->where('fecha_publicacion', '<=', Carbon::now())
                // ->orderby('fecha_publicacion','DESC')
                ->latest('fecha_publicacion');
    }

    public function setTituloAttribute($titulo)
    {
        $this->attributes['titulo'] = $titulo;
        $this->attributes['url'] = Str::slug($titulo);   
    }

}
