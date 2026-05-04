<?php

namespace App\Livewire\Forms;

use App\Models\Activity;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ActivityForm extends Form
{
    public ?Activity $activity = null;

    #[Validate('required|min:5')]
    public $activity_title = '';

    #[Validate('required|min:5')]
    public $activity_description = '';

    #[Validate('required|date')]
    public $activity_deadline = '';

    public function setActivity(Activity $activity)
    {
        $this->activity = $activity;
        $this->activity_title = $activity->activity_title;
        $this->activity_description = $activity->activity_description;
        $this->activity_deadline = $activity->activity_deadline;
    }
}
