<div {{ $attributes }}  class="flex flex-col justify-center bg-black/70 absolute w-screen h-screen">
    <form {{ $attributes }}>    
        <div class="flex flex-row rounded-l-sm overflow-hidden border bg-white w-[25rem] m-auto rounded-sm">
            <div class="border-r w-[1rem] bg-blue-300">
                {{ $activityColor ?? '' }}
            </div>
            <div class="flex flex-col w-full">
                <div class="flex p-3 border-b justify-between">
                    {{ $header }}
                </div>
                <div class="flex flex-col p-3 space-y-5">
                    {{ $content }}
                </div>
                <div class="flex border-t flex-row h-[2rem] justify-end">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </form>
</div>
