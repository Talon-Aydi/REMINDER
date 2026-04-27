<div class="relative flex flex-col pt-3 w-full max-w-md mx-auto">
    <input type="text" wire:model.live.debounce.300ms="namefield" wire:focus="$set('showResults', true)"
        wire:blur="hideResults" placeholder="Search..."
        class="w-full h-12 backdrop outline-none px-4 text-[#d9d9d9] rounded-md border border-[#d9d9d9]">

    @if ($showResults)
        <div class="absolute left-0 right-0 mt-14 bg-white rounded-md shadow-lg max-h-60 overflow-auto z-50">
            @foreach ($nameList as $name)
                <div wire:click="selectName('{{ $name }}')" class="px-4 py-2 cursor-pointer hover:bg-gray-100">
                    {{ $name }}
                </div>
            @endforeach
        </div>
    @endif

</div>
