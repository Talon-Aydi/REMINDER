<div class="flex flex-col w-full border-3 border-[#d9d9d9] rounded-sm shadow-2xl inset-shadow-2xl inset-shadow-black">
            <div class="flex flex-row text-[#d9d9d9] justify-between p-5 border-b h-[4rem] font-extrabold bg-black">
                <span class="mt-auto mb-auto">Activity feed</span>

                <span wire:click="openModal" class="mt-auto mb-auto text-[12px] cursor-pointer">
                    Assign new task
                </span>
            </div>

            <div class="flex flex-col h-full w-full overflow-hidden p-5 space-y-3 items-stretch bg-white">
                @foreach ($activities as $activity)
                    <div wire:click="update({{ $activity->activity_id }})" class="flex flex-row h-[5rem] bg-white rounded-sm">
                        <div class="w-[10px] border bg-blue-300 border-black rounded-l-sm overflow-hidden"></div>

                        <div class="flex flex-col w-full justify-end border-t border-b border-r rounded-r-sm">

                            <div class="flex flex-col px-2 mb-auto mt-auto">
                                <span>{{ $activity->activity_title }}</span>
                                <span class="text-[12px]">{{ $activity->activity_description }}</span>
                            </div>

                            <div class="flex flex-row px-2 text-[12px] h-[1.5rem] w-full border-t">
                                <span class="flex-2 mt-auto mb-auto">{{ $activity->activity_countdown }} days left</span>
                                <span class="flex-1 px-2 text-center mt-auto border-r border-l mb-auto">Resume</span>
                                <span wire:click.stop="delete({{$activity->activity_id}})" class="flex mt-auto text-center px-2 mb-auto">x</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
</div>
