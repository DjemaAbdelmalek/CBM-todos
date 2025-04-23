<?php

namespace App\Livewire;

use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();

    return redirect('/');
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
