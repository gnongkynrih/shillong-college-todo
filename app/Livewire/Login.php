<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function login(){
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
