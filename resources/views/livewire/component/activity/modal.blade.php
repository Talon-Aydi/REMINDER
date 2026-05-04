<div>
    @if ($show)
        <x-modals.activity-modal wire:submit.prevent="save">
            <x-slot:header>
                <input
                    type="text"
                    wire:model="form.activity_title"
                    placeholder="Activity Title"
                    class="border-none outline-none text-xl"
                />
                @error ('form.activity_title')
                    <span class="error">{{ $message }}</span>
                @enderror
                <span
                    wire:click="$dispatch('close-activity-modal')"
                    class="cursor-pointer"
                    >X</span
                >
            </x-slot:header>

            <x-slot:content>
                <div>
                    <label>Activity description</label>
                    <textarea
                        wire:model="form.activity_description"
                        class="px-2 py-1 h-[2rem] w-full border rounded-sm outline-none resize-none"
                        placeholder="Walking the dog..."
                    ></textarea>
                    @error ('form.activity_description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label>Activity deadline:</label>
                    <input
                        type="datetime-local"
                        wire:model="form.activity_deadline"
                        class="outline-none"
                    />
                    @error ('form.activity_deadline')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </x-slot:content>

            <x-slot:footer>
                <button type="submit" class="pr-3">
                    {{ $isEdit ? 'Update' : 'Create' }}
                </button>
            </x-slot:footer>
        </x-modals.activity-modal>
    @endif
</div>
