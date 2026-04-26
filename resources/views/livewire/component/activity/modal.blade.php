<div>
    <x-modals.activity-modal>
        <form wire:submit.prevent="save">
            <x-slot:header>
                <input type="text" wire:model="form.activity_title" placeholder="Activity Title"
                    class="border-none outline-none text-xl">

                <span wire:click="closeModal" class="cursor-pointer">X</span>
            </x-slot:header>

            <x-slot:content>
                <label>Activity description</label>
                <textarea wire:model="form.activity_description"
                    class="px-2 py-1 h-[2rem] w-full border rounded-sm outline-none resize-none" placeholder="Walking the dog..."></textarea>

                <label>Activity deadline:</label>
                <input type="datetime-local" wire:model="form.activity_deadline" class="outline-none">
            </x-slot:content>

            <x-slot:footer>
                <button type="submit" class="pr-3" wire:click="save">
                    {{ $isEdit ? 'Update' : 'Create' }}
                </button>
            </x-slot:footer>
        </form>
    </x-modals.activity-modal>
</div>
