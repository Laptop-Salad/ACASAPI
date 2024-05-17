<button {{ $attributes->merge(['class' => 'rounded-sm border text-amber-600 py-2 px-4 border-amber-600 hover:bg-amber-200']) }}>
    {{ $slot }}
</button>
