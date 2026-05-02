@yield('Dashboard')
<div class="flex flex-col justify-center items-stretch">
    <div class="flex flex-row justify-center space-x-10 w-full h-full items-stretch">
            <livewire:component.activity.feed />
        <div class="flex flex-col space-y-3 w-full">
            <div class="bg-white rounded-sm h-full w-full">
                SECTION A
            </div>
            <div class="bg-white rounded-sm h-full w-full">
                SECTION B
            </div>
        </div>
    </div>
</div>