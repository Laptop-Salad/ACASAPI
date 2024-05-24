<div class="bg-off-white text-pine min-h-screen">
    <x-navigation />

    <div class="p-5">
        <h1 class="text-3xl">Hello {{ auth()->user()->name }}</h1>

        @if (auth()->user()->tokens->isEmpty())
            <x-btn class="my-10" wire:click="generateToken">Gimme Token</x-btn>
        @endif

        @if (isset($this->token_created))
            <div class="my-10 border border-green-600 bg-green-50 p-2 md:w-1/3">
                <div class="border-b border-green-600 mb-2">
                    <p class="my-2">Token generated Successfully!</p>
                </div>
                <p>Please keep this in a secure location as it cannot be viewed again.</p>
                <p class="mt-2">
                    <span class="font-bold">Token:</span>
                    {{ $this->token_created }}</p>
            </div>
        @endif

        <x-btn wire:click="showCreateSchool" class="my-10">
            Create New School
        </x-btn>

        <section class="w-1/3">
            <h2>You have access to {{ $this->schools->count() }} schools</h2>

            @foreach($this->schools as $school)
                <div class="border border-black p-5 my-2 rounded-lg grid grid-cols-2 bg-pine text-off-white">
                    <p>{{ $school->name }}</p>
                    <div class="justify-self-end">
                        <a href="{{route('school', $school)}}">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </section>

        <x-create-school-modal />
    </div>
</div>
