<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListProducts extends Component
{
    use WithPagination;
    public $testValue=1;
    public function render()
    {

        $prods=Product::orderBy('id','DESC')
            ->paginate(6);
        return view('livewire.list-products',['myProds'=>$prods]);
    }
}
