<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $number;

    public function mount(){

        $this->number=1;
    }


    public function change(){
        $this->number=2;
        session()->flash('message','Changed');
    }
    public function change2(){
        $this->number=1;
        session()->flash('message','Changed2');
    }
    public function render()
    {
        return view('livewire.test');
    }
}
