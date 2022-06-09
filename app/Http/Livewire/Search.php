<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $searchResults;
    public $searchKey;

    public function mount(){
        $this->searchResults="";
        $this->searchKey=null;
    }
    public function render()
    {
        $this->searchResults=Product::with('categories')
            ->where('productName','like',"%".$this->searchKey."%")
            ->get();
        return view('livewire.search');
    }
}
