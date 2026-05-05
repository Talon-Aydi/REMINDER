<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public String $bio; 

    public function mount()
    {
        $this->bio = auth()->user()->bio ?? 'Write down a poetic bio!';
    }

    public function update()
    {   
        try {
            Auth::user()->update([
                'bio' => $this->bio
            ]);
        } catch (Throwable $e) {
            report ($e);
        }
    }

    public function render()
    {
        return view('livewire.user.dashboard.dashboard', [
            'user' => auth()->user(),
        ])->layout('layouts.user_platform');
    }
}
