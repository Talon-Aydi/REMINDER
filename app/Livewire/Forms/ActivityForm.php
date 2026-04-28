<?php

namespace App\Livewire\Forms;

use App\Models\Activity;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ActivityForm extends Form
{
    public ?Activity $activity = null;

    public $activity_user_id = 1;

    #[Validate('required|min:5')]
    public $activity_title = '';

    #[Validate('required|min:5')]
    public $activity_description = '';

    public $activity_deadline = '';

    public function setActivity(Activity $activity)
    {
        Log::info('ahhhhhhh');
        $this->activity = $activity;

        $this->activity_user_id = 1;
        $this->activity_title = $activity->activity_title;
        $this->activity_description = $activity->activity_description;
        $this->activity_deadline = $activity->activity_deadline;
    }

    public function store()
    {
        $this->validate();

        if ($this->activity && $this->activity->exists) {
            $this->activity->update(
                $this->only('activity_title', 'activity_description', 'activity_deadline')
            );
        } else {
            Activity::create(
                $this->only('activity_title', 'activity_description', 'activity_deadline', 'activity_user_id')
            );
        }
    }
}
