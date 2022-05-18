<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Main extends Component
{
    public $newArrivals,$trending,$topRated,$deal;

    public function mount(){
        $this->newArrivals=DB::table('products')
            ->inRandomOrder()
            ->take(2)
            ->get();


        $this->trending=DB::table('products')
            ->inRandomOrder()
            ->orderBy('id','DESC')
            ->take(2)
            ->get();


        $this->topRated=DB::table('products')
            ->inRandomOrder()
            ->take(2)
            ->get();

        $this->deal=DB::table('products')
            ->orderBy('id','DESC')
            ->take(2)
            ->get();
    }
    public function render()
    {

        return view('livewire.main');
    }
}
