<button {{ $attributes->merge(['class' => 'rounded-md text-pine border-2 border-pine hover:bg-pine hover:text-off-white py-2 px-3 font-bold']) }}>
    {{ $slot }}
</button>
