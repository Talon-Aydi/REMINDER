@yield ('Dashboard')
<div class="flex flex-col justify-center items-stretch">
    <div class="pt-5 pb-5 flex-col flex">
        <span class="text-[24px] font-extrabold"> Dashboard </span>
        <span> Welcome back, {{ $user-> name}}! </span>
    </div>

    <div
        class="flex flex-row justify-center space-x-10 w-full h-full items-stretch"
    >
        <livewire:component.activity.feed />
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
                <span class="italic">
                    "A profound quote about happiness."
                </span>
            </div>
        </div>
    </div>
</div>
