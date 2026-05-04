<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.dashboard', [
            'user' => auth()->user(),
        ])->layout('layouts.user_platform');
    }
}
