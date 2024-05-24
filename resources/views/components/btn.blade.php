@props(['inverse' => false])

@if ($inverse)
    <button {{ $attributes->merge(['class' => 'rounded-md text-off-white border-2 border-off-white hover:bg-off-white hover:text-pine py-2 px-3 font-bold']) }}>
        {{ $slot }}
    </button>
@else
    <button {{ $attributes->merge(['class' => 'rounded-md text-pine border-2 border-pine hover:bg-pine hover:text-off-white py-2 px-3 font-bold']) }}>
        {{ $slot }}
    </button>
@endif
