<?php

use Livewire\Component;

new class extends Component
{
    public $userName;
    public $messageContent;
    public $timeStamp = null;
    public $id; 
    public bool $isFriend;

    public function addFriend()
    {
        $this->dispatch('add-friend', $this->id);
    }
};
?>

<div class="flex flex-row p-3 bg-[#FFEAE6] rounded-2xl space-x-3 w-full">
    <div
        class="rounded-full w-[3rem] h-[3rem] shrink-0 aspect-square overflow-hidden"
    >
        <img
            src="{{ asset('storage/images/jany.png') }}"
            class="w-full h-full object-cover"
            alt=""
        />
    </div>
    <div class="flex-col space-y-1 justify-center w-full">
        <div class="flex flex-row justify-between pr-3">
            <span class="font-semibold"> {{ $userName }} </span>
            @if (isset($timeStamp))
                <span class="text-[12px] mt-auto mb-auto">
                    {{ $timeStamp }}
                </span>
            @endif
            @if (!$isFriend)
                <svg wire:click="addFriend" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mt-auto mb-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg>
            @endif
        </div>
        <span class="text-[14px] italic"> {{ $messageContent }} </span>
    </div>
</div>
