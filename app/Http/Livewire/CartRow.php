<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartRow extends Component
{
    public $cartItems=[];
    public $products=[];
    public $total;
    public $ProdId;
    public $tax;
    public $quantity;
    public $price;
    public $subTotal;
    public $rowId;
    public $myCart=[];

    public $productName;


    public function mount($product_id){
        $cart=Cart::content();
        $cart=$cart->where('id',$product_id);
        foreach ($cart as $item=>$value) {
            $this->productName .=$item;
        }
//       $this->quantity=$cart->qty;

    }

    public function render()
    {
        return view('livewire.cart-row');
    }
}
