<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register(){

        $validated = $this->validate([
            "name" => "required|string|max:255|min:3",
            "email"=> "required|email|unique:users,email",
            "password"=> "required|confirmed|min:1",
        ]);
        $user = User::create($validated);
        Auth::login($user);
        session()->regenerateToken();
        session()->flash("success","Welcome to CBM Todos app!");
        return redirect("/");

    }
    public function render()
    {
        return view('livewire.register')->layout('components.layouts');
    }
}
