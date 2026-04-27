<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;

class UserForm extends Form
{
    #[Validate('required|string|min:3|max:15')]
    public $name;

    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|string|min:8|max:20')]
    public $password;

    public function save()
    {
        $validate = $this->validate();

        User::create([
            'name' => $this-> name, 
            'email' => $this->email, 
            'password'=> $this->password
        ]);
    }
}

