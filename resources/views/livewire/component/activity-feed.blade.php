<div class="w-screen h-screen flex flex-col justify-center">
 <div class="flex flex-col w-[20rem] h-[40rem] border bg-white m-auto rounded-sm jersey">
    <div class="flex flex-row justify-between p-5 border-b h-[4rem]">
        <span class="mt-auto mb-auto">
            Ativity feed
        </span>
        <span class="mt-auto mb-auto text-[12px]">
            x Assign new task
        </span>
    </div>

    <div class="flex flex-col h-full w-full overflow-hidden p-5 space-y-3">
        <livewire:activity-card 
            title="A random task"
            description="I don't know what I'm going to do"/>
        <livewire:activity-card 
            title="Date with Sylus"
            description="Midnight fishing"/>
    </div>
 </div>
