<?php

use Illuminate\Support\Facades\Route;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\Articulo;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('ukmedik_web.index');
});

// -----------------RUTAS ADMINISTRATIVAS ------------- //
// Ruta del Dashborad
Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');

// Ruta para los articulos de venta
Route::resource('articulos', 'App\Http\Controllers\ArticuloController');

// Ruta  Noticias
Route::resource('noticias', 'App\Http\Controllers\NoticiaController');
Route::post('noticias/{noticia}/fotos', 'App\Http\Controllers\FotosController@store')->name('noticia.foto.store');
Route::delete('fotos/{foto}', 'App\Http\Controllers\FotosController@destroy')->name('fotos.destory');

// Ruta Categorias

// -----------------RUTAS ADMINISTRATIVAS ------------- //

// -----------------RUTAS DE USUARIOS ------------- //
// Ruta Empresa
Route::get('empresa', function () {
    return view('ukmedik_web.empresa');
});
// Ruta  medicinadeportiva
Route::get('medicinadeportiva', function () {
    return view('ukmedik_web.medicinadeportiva');
});
// Ruta  aloinjertos
Route::get('aloinjertos', function () {
    return view('ukmedik_web.aloinjertos');
});
// Ruta  aloinjertos
Route::get('protesis', function () {
    return view('ukmedik_web.protesis');
});
// Ruta  blog
Route::get('blog', function () {

    $noticias = Noticia::published()->paginate(3);
    $categorias = Categoria::all();       

    return view('ukmedik_web.blog', compact('noticias', 'categorias'));
});

Route::get('blog/{noticia}', 'App\Http\Controllers\NoticiaController@show')
;

// Ruta categorias
Route::get('categorias/{categoria}','App\Http\Controllers\CategoriasController@show')->name('categorias.show');

// Ruta etiquetas
Route::get('etiquetas/{etiqueta}','App\Http\Controllers\EtiquetasController@show')->name('etiquetas.show');

// Ruta  shop
Route::get('shop', function () {

    $articulos = Articulo::paginate(6);

    return view('ukmedik_web.shop', compact('articulos'));
});

Route::get('shop/{articulo}', 'App\Http\Controllers\ArticuloController@show')
;

// Ruta  contacto
Route::resource('contacto', 'App\Http\Controllers\ContactoController');

// Route::resource('/contacto', 'App\Http\Controllers\EtiquetasController')->names([
//     'store'     => 'contactoStore',
// ]);

// -----------------RUTAS DE USUARIOS ------------- //

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');


// -----------------RUTAS DEL CARRITA DE COMPRAS ------------- //

Route::get('add-articulo-to-cart/{articulo}',
'App\Http\Controllers\ArticuloController@addArticuloToCart'
)->name('add_articulo_to_cart');
Route::get('/cart',
'App\Http\Controllers\ArticuloController@showCart'
)->name('cart');
Route::get('/remove-articulo-from-cart/{articulo}',
'App\Http\Controllers\ArticuloController@removeArticuloFromCart'
)->name('remove_aticulo_from_cart');

// -----------------RUTAS DEL CARRITA DE COMPRAS ------------- //