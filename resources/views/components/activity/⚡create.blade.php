<?php

use Livewire\Component;
use App\Models\Activity;

new class extends Component {
    public $activityTitle = 'Activity title';
    public $activityModal = false;
    public $activityDeadline;
    public $activityDescription;

    public function mount()
    {
        $this->activityDeadline = now()->addHour()->format('Y-m-d\TH:i');
    }

    public function createActivity()
    {
        Activity::create([
            'activity_user_id' => 1,
            'activity_title' => $this->activityTitle,
            'activity_description' => $this->activityDescription,
            'activity_deadline' => $this->activityDeadline,
        ]);

        session()->flash('status', 'Activity has been created.');
        $this->dispatch('update-activity-feed');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->dispatch('activity-created');
    }

    public function setTitle()
    {
        $this->activityTitle = '';
    }
};
?>
<div wire:ignore>
    <div class="flex flex-col justify-center bg-black/70 absolute w-screen h-screen">
        <div class="flex flex-row rounded-l-sm overflow-hidden border bg-white w-[25rem] m-auto rounded-sm">
            <div class="border-r w-[1rem] bg-blue-300"></div>
            <div wire:submit="createActivity" class="flex flex-col w-full">
                <div class="h-[5rem] flex p-3 border-b justify-between">
                    <input wire:focus="setTitle" placeholder="Activity Title" wire:model="activityTitle" type="text"
                        class="border-none outline-none text-xl" name="activityTitle" id="activityTitle">
                    <span wire:click='closeModal' class="mt-auto mb-auto text-xl">
                        X
                    </span>
                </div>
                <div class="flex flex-col h-full">
                    <div class="flex-1 flex-col p-3 space-y-2">
                        <label for="activity_description">Activity description</label>
                        <textarea wire:model='activityDescription' class="px-2 py-1 h-[2rem] w-full border rounded-sm outline-none resize-none"
                            name="activity_description" id="activity_description" placeholder="Walking the dog..."></textarea>
                        <label for="activity_deadline">Activity deadline:</label>
                        <input wire:model='activityDeadline' class="outline-none" type="datetime-local"
                            name="activity_deadline" id="activity_deadline">
                    </div>
                    <div class="flex border-t flex-row h-[2rem] justify-end">
                        <button wire:click="createActivity" class="pr-3">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
