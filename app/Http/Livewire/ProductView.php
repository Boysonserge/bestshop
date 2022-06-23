<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductView extends Component
{
    public $openedProd;
    public $cart;
    public $showModal=false;
    public $title;
    public $cartPrice;
    public $cartQuantity;
    public $totalCart;
    public $selectedProd;
    public $selectedColors;
    public $showCartBtn=false;


    public $prodId;

    public function createModal(){
        $this->showModal=true;
    }

    public function mount($id){
        $this->prodId=$id;
        $this->cartQuantity=1;
        $this->totalCart=1;
        $this->cart=Cart::content();
        if ($this->cart->where('id',$id)->count()){
            $this->showCartBtn=true;
        }else{
            $this->showCartBtn=false;
        }

        $this->openedProd=Product::where('id',$id)
            ->first();
        $this->title="add '<b>".$this->openedProd->productName."</b>' to cart";

    }

    public function resetInputs(){
        $this->cartQuantity=1;
    }


    public function addCart($prodID){
        $products = Product::findOrFail($prodID);
        Cart::add($products->id,
            $products->productName,
            $this->cartQuantity,
            $products->productPrice,
        );
        $this->showCartBtn=true;
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
        return view('livewire.product-view');
    }
}
