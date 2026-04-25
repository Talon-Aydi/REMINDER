<?php

use Livewire\Component;
use App\Models\Activity;

new class extends Component {
    public $activityId;
    public $title;
    public $description;

    public function mount($title = null, $description = null)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function delete()
    {
        $activity = Activity::findOrFail($this->activityId);
        $activity->delete();

        $this->dispatch('update-activity-feed');
    }
};
?>


<div class="flex flex-row h-[5rem] jersey">
    <div class="w-[10px] border bg-blue-300 border-black rounded-l-sm overflow-hidden">
    </div>
    <div class="flex flex-col w-full justify-end border-t border-b border-r rounded-r-sm">
        <div class="flex flex-col px-2 mb-auto mt-auto">
            <span>
                {{ $title }}
            </span>
            <span class="text-[12px]">
                {{ $description }}
            </span>
        </div>
        <div class="flex flex-row px-2 text-[12px] h-[1.5rem] bg-gray-100 w-full border-t">
            <span class="flex-2 mt-auto mb-auto">
                x days left
            </span>
            <span class="flex-1 px-2 text-center mt-auto border-r border-l mb-auto">
                Resume
            </span>
            <span wire:click='delete' class="flex mt-auto text-center px-2 mb-auto">
                x
            </span>
        </div>
    </div>
</div>
