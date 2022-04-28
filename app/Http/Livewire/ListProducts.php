<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ListProducts extends Component
{
    public $testValue=1;
    public function render()
    {

        $prods=Product::orderBy('id','DESC')->get();
        return view('livewire.list-products',['myProds'=>$prods]);
    }
}
