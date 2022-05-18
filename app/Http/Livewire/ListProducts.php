<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListProducts extends Component
{
    use WithPagination;
    public $testValue=1;
    public $perPage;

    public function mount(){
        $this->perPage=6;
    }

    public function loadMore(){
        $this->perPage +=6;
    }
    public function render()
    {
        $prods=Product::orderBy('id','DESC')
            ->paginate($this->perPage);
        return view('livewire.list-products',['myProds'=>$prods]);
    }
}
