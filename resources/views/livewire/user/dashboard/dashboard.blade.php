@yield ('Dashboard')
<div class="flex flex-col justify-center items-stretch">
    <div class="pt-5 pb-5 flex-col flex">
        <span class="text-[24px] font-extrabold"> Dashboard </span>
        <span> Welcome back, {{ $user-> name}}! </span>
    </div>

    <div
        class="flex flex-row justify-center space-x-10 w-full h-full items-stretch"
    >
        <livewire:activity.feed />
        <div class="flex flex-col space-y-3 w-full">
            <div
                class="flex flex-col bg-white rounded-2xl h-full w-full p-5 space-y-3"
            >
                <span class="font-extrabold"> Best friends </span>
                <div class="flex flex-row w-full h-full space-x-3">
                    <div class="rounded-full w-[5rem] h-[5rem] overflow-hidden">
                        <img
                            src="{{ asset('storage/images/aphy.png') }}"
                            alt=""
                        />
                    </div>
                    <div class="rounded-full w-[5rem] h-[5rem] overflow-hidden">
                        <img
                            src="{{ asset('storage/images/riri.png') }}"
                            class="w-full h-full object-cover"
                            alt=""
                        />
                    </div>
                    <div class="rounded-full w-[5rem] h-[5rem] overflow-hidden">
                        <img
                            src="{{ asset('storage/images/sheila.png') }}"
                            class="w-full h-full object-cover"
                            alt=""
                        />
                    </div>
                    <div class="rounded-full w-[5rem] h-[5rem] overflow-hidden">
                        <img
                            src="{{ asset('storage/images/jany.png') }}"
                            class="w-full h-full object-cover"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <div
                class="flex flex-col bg-white rounded-2xl h-full w-full p-5 space-y-2"
            >
                <span class="font-extrabold"> Status </span>
                <div class="group flex flex-row items-stretch">
                    <input
                        type="text"
                        class="italic p-3 w-full outline-none"
                        value="A profound quote about happiness."
                    />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mt-auto mb-auto opacity-0 group-hover:opacity-100 group-focus-within:opacity-100">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
