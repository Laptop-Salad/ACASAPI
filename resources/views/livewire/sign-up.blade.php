<div class="grid grid-rows-2 min-h-screen bg-off-white text-pine">
    <div class="p-5 flex flex-col items-center justify-center">
        <h1 class="font-bold text-2xl text-center">Sign Up to ASMS</h1>
    </div>

    <div class="p-5 flex flex-col items-center">
        <form wire:submit="submitForm" class="md:w-1/3 space-y-2">
            <x-form.input type="string" model="form.name" label="Name" name="Name" required="true"/>
            <x-form.input type="email" model="form.email" label="Email" name="Email" required="true"/>
            <x-form.input type="password" model="form.password" label="Password" name="Password" required="true" />

            <div class="text-red-500">
                @error('form.error') <span>{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-end">
                <x-btn type="submit">Sign Up</x-btn>
            </div>
        </form>
    </div>
</div>
