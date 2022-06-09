<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ListProducts extends Component
{

    use WithPagination;

    public $isInCart=0;
    public $testValue=1;
    public $perPage;
    public $test;

    public $cart;

    public $cartQuantity;

    public function mount(){
        $this->perPage=12;
        $this->cart = Cart::content();
        $this->cartQuantity=2;
    }

    public function loadMore(){
        $this->perPage +=6;
    }

    //add product to cart
    public function addCart($prodID){
        $products = Product::findOrFail($prodID);
        Cart::add($products->id,
            $products->productName,
            $this->cartQuantity,
            $products->productPrice,
        );
        $this->isInCart=1;
        session()->flash('message', 'Product added to the cart');
//        dd($prodID,$products->productName,$this->cartQuantity,$products->productPrice);
    }





    public function render()
    {
        $prods=Product::orderBy('id')->paginate($this->perPage);
        return view('livewire.list-products',['myProds'=>$prods]);
    }
}
