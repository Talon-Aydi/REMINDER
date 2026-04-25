<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\Activity;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On; 

class ActivityFeed extends Component
{
    public $activities; 
    public $activityModal = false; 
    protected $listeners = ['closeModal'];

    #[On('update-activity-feed')]
    public function mount()
    {
        $this->activities = Activity::all();
    }

    public function render()
    {
        return view('livewire.component.activity-feed')
        ->layout('base');;
    }

    public function enableModal()
    {
        $this->activityModal = true;
    }

    #[On('activity-created')]
    public function closeModal()
    {
        $this->activityModal = false; 
    }
}
