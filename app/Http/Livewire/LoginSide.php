<?php

namespace App\Http\Livewire;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class LoginSide extends Component
{
    public $emailOrPhone,$password;

    public function login(){
        $validates = $this->validate([
            'emailOrPhone' => 'email',
            'password' => 'required|string'
        ]);

        $this->emailOrPhone=$validates['emailOrPhone'];
        $this->password=$validates['password'];
        $clientCheck=Client::where('email',$this->emailOrPhone)
            ->orWhere('phone',$this->emailOrPhone)
            ->first();

        if ($clientCheck && Hash::check($this->password, $clientCheck->password)){
            session()->put('ClientInfo',$clientCheck);
        }else{
            back()->with('fail','Invalid credentials');
        }
    }
    public function render()
    {

        return view('livewire.login-side');
    }
}
