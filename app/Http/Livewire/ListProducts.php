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

    public $showModal=false;
    public $title="Add to cart";
    public $prodId=null;


    public $cartPrice;

    public $isInCart=0;
    public $testValue=1;
    public $perPage;
    public $test;

    public $cart;

    public $cartQuantity;
    public $totalCart;
    public $selectedProd;
    public $selectedColors;

    public function resetInputs(){
        $this->cartQuantity=1;
    }

    public function mount(){
        $this->perPage=12;
        $this->cart = Cart::content();
        $this->cartQuantity=1;
        $this->totalCart=1;
    }


    public function createModal($productId){
        $this->prodId=$productId;
        $this->showModal=true;
        $this->resetInputs();
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
        $this->resetInputs();
        $this->showModal=false;
        session()->flash('message', 'Product added to the cart');
//        dd($prodID,$products->productName,$this->cartQuantity,$products->productPrice);
    }

    public function render()
    {
        if ($this->showModal==true){
            $this->selectedProd=Product::query()->with('colors')->find($this->prodId);
            $this->totalCart=($this->selectedProd->productPrice)* (int) $this->cartQuantity;

        }
        $prods=Product::orderBy('id')->paginate($this->perPage);
        return view('livewire.list-products',['myProds'=>$prods]);
    }
}
