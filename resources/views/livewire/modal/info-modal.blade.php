<?php

use Livewire\Component;
use App\Livewire\Forms\User\LoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

new class extends Component {

    public $show = false;

    #[On('open-info-modal')]
    public function open($activityId = null)
    {
        $this->show = true;
    }
};
?>

<div>
    @if ($show)
        <x-modals.activity-modal>
            <x-slot:header>
                <span> Oops! </span>
                <span
                    wire:click="$dispatch('close-activity-modal')"
                    class="cursor-pointer"
                    >X</span
                >
            </x-slot:header>

            <x-slot:content>
                <span>
                    In order to reach your dashboard, you need to log in.
                </span>
            </x-slot:content>

            <x-slot:footer>
                La la land
            </x-slot:footer>
        </x-modals.activity-modal>
    @endif
</div>
