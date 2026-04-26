<?php

use Livewire\Component;
use App\Models\Activity;
use Carbon\Carbon;

new class extends Component {
    public $activity;
    public $activity_countdown;

    public function mount($activity = null)
    {
        $this->activity = $activity;
        $this->calculateCountdown();
    }

    public function calculateCountdown()
    {
        $today = Carbon::today();
        $deadline = Carbon::parse($this->activity->activity_deadline)->startOfDay();

        $this->activity_countdown = $today->diffInDays($deadline, false);
    }

    public function update()
    {
        $this->dispatch('open-activity-modal', $this->activity->id);
    }

    public function delete()
    {
        Activity::findOrFail($this->activityId)->delete();
        $this->dispatch('update-activity-feed');
    }
};
?>

<div wire:click="update" class="flex flex-row h-[5rem] jersey">
    <div class="w-[10px] border bg-blue-300 border-black rounded-l-sm overflow-hidden"></div>

    <div class="flex flex-col w-full justify-end border-t border-b border-r rounded-r-sm">

        <div class="flex flex-col px-2 mb-auto mt-auto">
            <span>{{ $activity->activity_title }}</span>
            <span class="text-[12px]">{{ $activity->activity_description }}</span>
        </div>

        <div class="flex flex-row px-2 text-[12px] h-[1.5rem] w-full border-t">
            <span class="flex-2 mt-auto mb-auto">{{ $activity_countdown }} days left</span>
            <span class="flex-1 px-2 text-center mt-auto border-r border-l mb-auto">Resume</span>
            <span wire:click.stop="delete" class="flex mt-auto text-center px-2 mb-auto">x</span>
        </div>
    </div>
</div>
