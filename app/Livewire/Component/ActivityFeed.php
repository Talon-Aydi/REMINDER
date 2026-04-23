<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Activity;

class ActivityFeed extends Component
{
    public $activities; 

    public function mount()
    {
        $this->activities = Activity::all();
    }

    public function render()
    {
        return view('livewire.component.activity-feed')
        ->layout('base');;
    }
}
