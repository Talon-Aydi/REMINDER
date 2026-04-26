<div class="jersey">
    @if ($activityModal)
        <livewire:activity.create />
    @endif
    <div class="w-screen h-screen flex flex-col justify-center">
        <div class="flex flex-col w-[20rem] h-[40rem] border bg-white m-auto rounded-sm">
            <div class="flex flex-row justify-between p-5 border-b h-[4rem]">
                <span class="mt-auto mb-auto">
                    Ativity feed
                </span>
                <span wire:click='enableModal' class="mt-auto mb-auto text-[12px]">
                    x Assign new task
                </span>
            </div>

            <div class="flex flex-col h-full w-full overflow-hidden p-5 space-y-3">
                @foreach ($activities as $activity)
                    <livewire:activity.card :activity='$activity' />
                @endforeach
            </div>
        </div>
    </div>
