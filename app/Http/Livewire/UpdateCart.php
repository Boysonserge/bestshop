<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class UpdateCart extends Component
{
    public $myCart=[];
    public $quantity;
    public $rowId;


    public function mount($myCarts){
            $this->quantity=$myCarts->qty;
            $this->rowId=$myCarts->rowId;
    }

    public function updateCart(){
        Cart::update($this->rowId, $this->quantity);
        $this->redirect('cart.fetch');
    }

    public function render()
    {
        return view('livewire.update-cart');
    }
}
