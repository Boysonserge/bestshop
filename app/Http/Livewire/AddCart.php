<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCart extends Component
{
    public $myCart=[];
    public $quantity;
    public $rowId;

    public function mount(){

    }
    public function render()
    {
        return view('livewire.add-cart');
    }
}
