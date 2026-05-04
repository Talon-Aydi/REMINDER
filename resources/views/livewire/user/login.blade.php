<?php

use Livewire\Component;
use App\Livewire\Forms\User\LoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

new class extends Component {
    public LoginForm $form;

    public function submit()
    {
        $this->form->validate();

        $credentials = [
            'email' => $this->form->email,
            'password' => $this->form->password,
        ];

        if (Auth::attempt($credentials, request()->boolean('remember'))) {
            session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        $this->form->addError('password', 'Invalid credentials.');
    }
};
?>

<div
    class="backdrop text-center p-10 flex flex-col space-y-3 border-3 border-[#d9d9d9] text-[#d9d9d9] shadow-2xl inset-shadow-2xl inset-shadow-black w-[25rem] m-auto rounded-xl"
>
    <div class="flex flex-col">
        <span class="font-extrabold mt-10 text-[25px]"> Log in </span>
        <span class="text-xs"> Not a member yet? Sign in </span>
    </div>
    <form wire:submit.prevent="submit">
        <div class="flex flex-col space-y-7 text-left p-10">
            <x-form.input wire:model="form.email" placeholder="E-mail" />
            @error ('form.email')
                <span class="error">{{ $message }}</span>
            @enderror

            <x-form.input
                wire:model="form.password"
                placeholder="Password"
                type="password"
            />
            @error ('form.password')
                <span class="error">{{ $message }}</span>
            @enderror
            <button type="submit" class="rounded-xl h-12 border font-extrabold">
                Log in
            </button>
        </div>
    </form>
</div>
