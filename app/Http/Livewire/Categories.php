<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories;

    public function mount(){
        $this->categories=Category::with('products')->get();

    }
    public function render()
    {
        return view('livewire.categories');
    }
}
