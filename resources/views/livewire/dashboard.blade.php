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
</div>
