<div class="grid grid-rows-2 h-screen">
    <div class="bg-gradient-to-b from-amber-400 to-orange-500 p-5 flex flex-col items-center justify-center">
        <h1 class="text-white font-bold text-2xl">Welcome to ACAS</h1>
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
