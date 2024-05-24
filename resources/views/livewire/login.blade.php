<div class="grid grid-rows-2 h-screen bg-orange-200">
    <div class="p-5 flex flex-col items-center justify-center">
        <h1 class="font-bold text-2xl">Login to ASMS</h1>
    </div>

    <div class="p-5 flex flex-col items-center">
        <form wire:submit="submit" class="md:w-1/3">
            <x-form.input type="email" model="email" label="email" name="Email" required="true"/>
            <x-form.input type="password" model="password" label="password" name="Password" required="true" />

            <div class="text-red-500">
                @error('error') <span>{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-end">
                <x-btn type="submit">Login</x-btn>
            </div>
        </form>
    </div>
</div>
