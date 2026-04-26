<?php

namespace App\Livewire\Component\Activity;

use Livewire\Component;
use App\Models\Activity;
use App\Livewire\Forms\ActivityForm;

class Modal extends Component
{
    public ActivityForm $form;
    public bool $isEdit = false;

    public function mount(Activity $activity = null)
    {
        if ($activity && $activity->exists) {
            $this->form->fill($activity->toArray());
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
