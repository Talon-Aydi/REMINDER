<?php

namespace App\Livewire\User;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.dashboard')
            ->layout('layouts.user_platform');
    }
}
