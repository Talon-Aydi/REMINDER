<?php

use Livewire\Component;

new class extends Component {
    //
};
?>
<div
    class="backdrop text-center p-10 flex flex-col space-y-3 border-2 border-[#d9d9d9] text-[#d9d9d9] shadow-2xl inset-shadow-2xl inset-shadow-black w-[25rem] h-[30rem] m-auto rounded-xl">
    <div class="flex flex-col">
        <span class="font-extrabold mt-10 text-[25px]">
            Sign up
        </span>
        <span class="text-xs">
            Already a member? Log in
        </span>
    </div>
    <div class="flex flex-col space-y-7 text-left p-10">
        <input class="border-b outline-none" placeholder="Email" type="text">
        <input class="border-b outline-none" placeholder="Password" type="text">
        <input class="border-b outline-none" placeholder="Confirm password" type="text">
        <button class="rounded-xl  h-12 border font-extrabold">Sign up</button>
    </div>
</div>
</div>
