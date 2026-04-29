<?php

namespace App\Livewire\Forms;

use App\Models\Activity;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Log;

class ActivityForm extends Form
{
    public ?Activity $activity = null;

    #[Validate('required')]
    public $activity_user_id = 1;

    #[Validate('required|min:5')]
    public $activity_title = '';

    #[Validate('required|min:5')]
    public $activity_description = '';

    #[Validate('required|date')]
    public $activity_deadline = '';

    public function setActivity(Activity $activity)
    {
        $this->activity = $activity;

        $this->activity_user_id = 1;
        $this->activity_title = $activity->activity_title;
        $this->activity_description = $activity->activity_description;
        $this->activity_deadline = $activity->activity_deadline;
    }

    public function store()
    {
        Log::info($this->activity_deadline);
        Activity::create($this->validate());
    }

    public function update(Activity $activity)
    {
        $activity->update($this->validate());
    }
}
