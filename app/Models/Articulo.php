<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Helpers\Currency;


/**
 * App\Models\Articulo
 *
* @property-read mixed $formatted_price

*/


class Articulo extends Model
{
    use HasFactory;
    
    protected $table = 'articulos';

    protected $appends = [
        "formatted_price"
   ];

    protected $fillable = [
       'codigo', 'titulo', 'subtitulo', 'descripcion', 'cantidad', 'precio','imagen' 
    ];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function setTituloAttribute($titulo)
    {
        $this->attributes['titulo'] = $titulo;
        $this->attributes['url'] = Str::slug($titulo);   
    }

    public function getFormattedPriceAttribute() { 
        return Currency::formatCurrency($this->precio);
    }

   

}
