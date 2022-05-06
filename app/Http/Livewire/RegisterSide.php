<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class RegisterSide extends Component
{
    public $email, $phone, $password, $address,$names;
    public $logged;


    public function register()
    {
        $validates = $this->validate([
            'names' => 'required|string',
            'email' => 'email|unique:clients',
            'phone' => 'required|string|unique:clients',
            'address' => 'required|string',
            'password' => 'required|string'
        ]);

        $pass = Hash::make($validates['password']);
        $validates['password'] = $pass;
        $client = Client::create($validates);

//        $this->logged=Auth::id();
//        Auth::guard('client')->attempt();
        session()->put('clientDetails',$client);
        return Redirect::intended('client/dashboard');
    }

    public function render()
    {
        return view('livewire.register-side');
    }
}
