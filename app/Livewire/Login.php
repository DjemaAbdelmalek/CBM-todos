<?php

namespace App\Livewire;

use Illuminate\validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Login extends Component
{
    public $email;
    public $password;
    public function login(){
        $validated = $this->validate([
            "email"=> "required|email",
            "password"=> "required",
        ]);
        $user= Auth::attempt($validated);
        if(!$user){
            throw ValidationException::withMessages(["email"=> "Invalid credantials, please try again"]);
        }

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.login');
    }
}
