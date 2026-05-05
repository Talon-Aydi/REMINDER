<?php

namespace App\Livewire\Activity;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Feed extends Component
{
    public $showModal = false;

    public $activityEdit;

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

    #[On('update-activity-feed')]
    public function refreshFeed() {}

    public function render()
    {
        $userActivities = Activity::where('activity_user_id', Auth::user()->id)->get();

        return view('livewire.component.activity.feed', [
            'activities' => $userActivities,
        ]);
    }
}
