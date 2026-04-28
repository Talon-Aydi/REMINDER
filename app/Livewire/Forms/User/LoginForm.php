<?php

namespace App\Livewire\Forms\User;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string|min:3|max:15')]
    public $email;

    #[Validate('required|string|min:8')]
    public $password;
}
