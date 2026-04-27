<?php

namespace App\Livewire\Component\Activity;

use Livewire\Component;
use App\Models\Activity;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;

class Feed extends Component {
    public $activities;
    public $showModal = false;
    public $activityEdit; 

    public function mount()
    {   
        $this->activities = Activity::all();
    }

    public function render()
    {
        return view('livewire.component.activity.feed');
    }

    public function openModal()
    {   
        $this->dispatch('');
    }


    #[On('close-activity-modal')]
    public function closeModal()
    {
        $this->showModal = false;
    }

    #[On('update-activity-feed')]
    public function refreshFeed()
    {
        $this->activities = Activity::all();
    }
};
?>