<?php
@include 'modal.activity-modal';
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
    <x-modals.activity-modal>
        <x-slot:header>
            <input type="text" wire:focus="setTitle" wire:model="activityTitle" placeholder="Activity Title"
                class="border-none outline-none text-xl" name="activityTitle" id="activityTitle">
        </x-slot:header>

        <x-slot:content>
            <label for="activity_description">Activity description</label>
            <textarea wire:model='activityDescription' class="px-2 py-1 h-[2rem] w-full border rounded-sm outline-none resize-none"
                name="activity_description" id="activity_description" placeholder="Walking the dog..."></textarea>
            <label for="activity_deadline">Activity deadline:</label>
            <input wire:model='activityDeadline' class="outline-none" type="datetime-local" name="activity_deadline"
                id="activity_deadline">
        </x-slot:content>

        <x-slot:footer>
            <button wire:click="createActivity" class="pr-3">Save</button>
        </x-slot:footer>
    </x-modals.activity-modal>
</div>
