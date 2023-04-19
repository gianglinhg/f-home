<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty+1;
        Cart::update($rowId, $qty);
        $this->emitTo('client.cart-icon-component','refreshComponent');
    }
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty-1;
        if($qty == 0)
        Cart::update($rowId, 1);
        else Cart::update($rowId, $qty);
        $this->emitTo('client.cart-icon-component','refreshComponent');
    }
    public function deleteCart($rowId){
        Cart::remove($rowId);
    }
    public function emptyCart(){
        Cart::destroy();
    }
    public function render()
    {
        // $ship = Cart::total() <= 2000000 ? 50000 : 0;
        $ship = 0;
        return view('livewire.client.cart-component',compact('ship'));
    }
}
