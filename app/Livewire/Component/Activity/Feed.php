<?php

namespace App\Livewire\Component\Activity;

use App\Models\Activity;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;

class Feed extends Component
{
    public $showModal = false;

    public $activities;
    public $activity_countdown;
    public $activityEdit;

    #[On('update-activity-feed')]
    public function render()
    {
        $this->activities = Activity::latest()->get();
        return view('livewire.component.activity.feed');
    }

    public function delete($activityId)
    {
        $activity = Activity::findOrFail($activityId);
        Activity::findOrFail($activity->activity_id)->delete();
    }

    public function update($activityId)
    {   
        $activity = Activity::findOrFail($activityId);
        $this->dispatch('open-activity-modal', $activity->activity_id);
    }

    public function openModal()
    {
        $this->dispatch('open-activity-modal');
    }

    #[On('close-activity-modal')]
    public function closeModal()
    {
        $this->showModal = false;
    }
}
