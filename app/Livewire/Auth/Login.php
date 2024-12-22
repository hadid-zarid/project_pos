<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = "admin2@admin.com";
    public $password = "";
    public $errorMessage = '';

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($valid)) {
            return redirect()->route('home');
        } else {
            $this->errorMessage = 'mohon maaf password atau username ada salah'; // Set error message
        }
    }

    public function render()
    {
        return view('livewire.auth.login', [
            'errorMessage' => $this->errorMessage,
        ]);
    }
}
