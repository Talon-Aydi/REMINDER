<?php

namespace App\Livewire\Component\Activity;

use Livewire\Component;
use App\Models\Activity;
use Illuminate\Support\Facades\Log;
use App\Livewire\Forms\ActivityForm; 

class Modal extends Component
{
    public ActivityForm $form;
    public bool $isEdit = false;

    public function mount(Activity $activity)
    {
        if ($activity->exists) {
            $this->form->fill([
                'activity_title' => $activity->activity_title,
                'activity_description' => $activity->activity_description,
                'activity_deadline' => $activity->activity_deadline,
            ]);

            $this->isEdit = true;
        }
    }

    public function save()
    {
        $this->form->store();

        $this->dispatch('update-activity-feed');
        $this->dispatch('close-activity-modal');
    }

    public function render()
    {
        return view('livewire.component.activity.modal');
    }
}
