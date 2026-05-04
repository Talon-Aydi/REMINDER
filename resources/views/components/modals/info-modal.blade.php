<div
    {{ $attributes->merge(['class' => 'fixed inset-0 bg-black/70 flex justify-center items-center']) }}
>
    <form
        class="flex flex-row rounded-sm overflow-hidden border bg-white w-[25rem]"
    >
        <div class="flex flex-col w-full">
            <div class="flex p-3 border-b justify-between">{{ $header }}</div>

            <div class="flex flex-col p-3 space-y-5">{{ $content }}</div>

            <div class="flex border-t flex-row h-[2rem] justify-end">
                {{ $footer }}
            </div>
        </div>
    </form>
</div>
