<?php

namespace App\Livewire\Component\Activity;

use App\Livewire\Forms\ActivityForm;
use App\Models\Activity;
use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public ActivityForm $form;

    public bool $isEdit = false;

    public $activity;

    public $show = false;

    #[On('open-activity-modal')]
    public function open($activityId = null)
    {
        $this->reset(['isEdit', 'activity']);
        $this->form->reset();

        if ($activityId) {
            $this->activity = Activity::find($activityId);
            if ($this->activity) {
                $this->form->setActivity($this->activity);
                $this->isEdit = true;
            }
        }
        $this->show = true;
    }

    #[On('close-activity-modal')]
    public function close($activityId = null)
    {
        $this->show = false;
    }

    public function save()
    {
        $data = $this->form->validate();
        if ($this->activity && $this->activity->exists) {
            $this->activity->update($data);
        } else {
            Activity::create($data);
        }

        $this->dispatch('update-activity-feed');
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.component.activity.modal');
    }
}
