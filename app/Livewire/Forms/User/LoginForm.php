<?php

namespace App\Livewire\Forms\User;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Form
{
    #[Validate('required|string|min:3|max:15')]
    public $email;

    #[Validate('required|string|min:8')]
    public $password;

    public function login()
    {
        $validate = $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/activity');
        }

        $this->addError('email', 'Invalid credentials');
    }
}
