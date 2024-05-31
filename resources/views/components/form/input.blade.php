@props([
    'label',
    'name',
    'model',
    'required' => false,
    'type' => 'text',
    'icon' => '',
    'min' => null,
    'max' => null,
])

<div {{ $attributes }}>
    <div class="border-2 border-pine p-2 rounded-t-md text-off-white bg-pine">
        <label for="{{$name}}">
            <i class="{{$icon}}"></i>
            {{$label}} {{$required ? "*" : "" }}
        </label>
    </div>

    <div class="border-2 border-pine p-2 rounded-b-md">
        <input
            @if (isset($min)) min="{{$min}}" @endif
            @if (isset($max)) max="{{$max}}" @endif
            autocomplete="off"
            class="bg-transparent outline-none"
            type="{{$type}}"
            id="{{$name}}"
            wire:model="{{$model}}"
            @if ($required) required @endif >
    </div>
</div>
