<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ActivityFeed extends Component
{
    public function render()
    {
        return view('livewire.component.activity-feed')
        ->layout('base');;
    }
}
