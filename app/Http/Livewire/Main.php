<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Main extends Component
{
    public $newArrivals,$trending,$topRated,$deal;

    public function mount(){
        $this->newArrivals=Product::query()
            ->inRandomOrder()
            ->take(2)
            ->get();


        $this->trending=Product::query()
            ->inRandomOrder()
            ->orderBy('id','DESC')
            ->take(2)
            ->get();


        $this->topRated=Product::query()
            ->inRandomOrder()
            ->take(2)
            ->get();

        $this->deal=Product::query()
            ->orderBy('id','ASC')
            ->take(2)
            ->get();
    }
    public function render()
    {

        return view('livewire.main');
    }
}
