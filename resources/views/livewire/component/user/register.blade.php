<?php

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use App\Models\User;

new class extends Component {
    public UserForm $form;

    public function save()
    {
        $this->validate();

        User::create($this->form->only(['name', 'email', 'password']));

        return $this->redirect('/activity');
    }
};
?>
<div
    class="backdrop text-center p-10 flex flex-col space-y-3 border-2 border-[#d9d9d9] text-[#d9d9d9] shadow-2xl inset-shadow-2xl inset-shadow-black w-[25rem] m-auto rounded-xl">
    <form wire:submit="save">
        <div class="flex flex-col">
            <span class="font-extrabold mt-10 text-[25px]">
                Sign up
            </span>
            <span class="text-xs">
                Already a member? Log in
            </span>
        </div>
        <div class="flex flex-col space-y-7 text-left p-10">
            <input wire:model="form.name" class="border-b outline-none" placeholder="Name" type="text">
            @error('form.name')
                <span class="error">{{ $message }}</span>
            @enderror

            <input wire:model="form.email" class="border-b outline-none" placeholder="Email" type="text">
            @error('form.email')
                <span class="error">{{ $message }}</span>
            @enderror

            <input wire:model="form.password" class="border-b outline-none" placeholder="Password" type="text">
            @error('form.password')
                <span class="error">{{ $message }}</span>
            @enderror

            <input class="border-b outline-none" placeholder="Confirm password" type="text">
            <button type="submit" class="rounded-xl  h-12 border font-extrabold">Sign up</button>
        </div>
    </form>
</div>
</div>
