<div class="w-screen h-screen flex flex-col justify-center">
    <div class="flex flex-col w-[20rem] h-[25rem] justify-center text-center text-white m-auto space-y-2">
        <span class="text-[2rem] font-bold">Name list</span>
        <input wire:model.live.debounce.250ms="namefield" type="text" name="name" id="name"
            class="w-full h-[3rem] text-black bg-white px-3 border-0 rounded-sm" placeholder="Jane Doe">

        <div class="bg-white flex flex-col w-[20rem] h-[10rem] text-left px-3 py-3 space-y-2 rounded-sm overflow-auto">
            @foreach ($nameList as $name)
                <span wire:key="name-{{ $name }}" wire:transition class="text-black">{{ $name }}</span>
            @endforeach
        </div>
    </div>
</div>
