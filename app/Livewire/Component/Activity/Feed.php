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
        return view('livewire.component.activity.feed')->layout('base');
    }

    #[On('open-activity-modal')]
    public function openModal($activityId = null)
    {
        $this->activityEdit = $activityId
            ? Activity::find($activityId)
            : null;

        $this->showModal = true;
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