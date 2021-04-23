<?php

namespace App\Services;

use App\Helpers\Currency;
use App\Models\Articulo;
use Illuminate\Support\Collection;

/**
 * Class Cart
 * @package App\Classes
 */
class Cart {

    /**
     * @var Collection
     */
    protected Collection $cart;

    /**
     * Cart constructor.
     */
    // public $items=null;
    // public function __construct($oldCart){
    //     if($oldCart){
    //         $this->items=$oldCart->items;
    //     }
    // }

    public function __construct() {
        if (session()->has("cart")) {
            $this->cart = session("cart");
        } else {
            $this->cart = new Collection;
        }
    }

    /**
     *
     * Get cart contents
     *
     */
    public function getContent(): Collection {
        return $this->cart;
    }

    /**
     * Save the cart on session
     */
    protected function save(): void {
        session()->put("cart", $this->cart);
        session()->save();
    }

    /**
     *
     * Add Articulo on cart
     *
     * @param Articulo $articulo
     */
    public function addArticulo(Articulo $articulo): void {
        $this->cart->push($articulo);
        $this->save();
    }

    /**
     *
     * Remove articulo from cart
     *
     * @param int $id
     */
    public function removeArticulo(int $id): void {
        $this->cart = $this->cart->reject(function (Articulo $Articulo) use ($id) {
            return $Articulo->id === $id;
        });
        $this->save();
    }

    /**
     *
     * calculates the total cost in the cart
     *
     * @param bool $formatted
     * @return mixed
     */
    public function totalAmount($formatted = true) {
        $amount = $this->cart->sum(function (Articulo $articulo) {
            return $articulo->precio;
        });
        if ($formatted) {
            return Currency::formatCurrency($amount);
        }
        return $amount;
    }

    /**
     *
     * all taxes for cart
     *
     * @param bool $formatted
     * @return float|int|string
     */
    public function taxes($formatted = true) {
        $total = $this->totalAmount(false);
        if ($total) {
            $total = ($total * env('TAXES')) / 100;
            if ($formatted) {
                return Currency::formatCurrency($total);
            }
            return $total;
        }
        return 0;
    }

    /**
     *
     * Total products in cart
     *
     * @return int
     */
    public function hasProducts(): int {
        return $this->cart->count();
    }

    /*
     * Clear cart
     */
    public function clear(): void {
        $this->cart = new Collection;
        $this->save();
    }

    
}
