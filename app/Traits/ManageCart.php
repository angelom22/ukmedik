<?php
namespace App\Traits;

use App\Models\Articulo;
use App\Services\Cart;

trait ManageCart {
    public function showCart() {
        return view('payment.cart');
    }

    public function addArticuloToCart(Articulo $articulo) {
        $cart = new Cart;
        $cart->addArticulo($articulo);
        session()->flash("message", ["flash", __("Artículo añadido al carrito correctamente")]);
        return redirect(route('cart'));
    }

    public function removeArticuloFromCart(Articulo $articulo) {
        // dd('hola');
        $cart = new Cart;
        $cart->removeArticulo($articulo->id);
        session()->flash("message", ["flash", __("Artículo eliminado del carrito correctamente")]);
        return back();
    }

    
}
