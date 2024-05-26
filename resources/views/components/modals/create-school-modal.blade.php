<div>
    <x-modals.modal class="p-2" x-show="$wire.show_create_school">
        <h2 class="font-bold text-xl">Create new School</h2>

        <form wire:submit="createSchool">
            <x-form.input class="my-5" label="Name" name="name" model="form.name"/>
            <x-btn
                type="button"
                wire:click="show_create_school = false"
                class="text-red-600 hover:bg-red-200 border-red-600 my-5">
                Cancel
            </x-btn>
            <x-btn class="text-green-600 hover:bg-green-200 border-green-600 my-5" type="submit">Create</x-btn>
        </form>
    </x-modals.modal>
</div>
