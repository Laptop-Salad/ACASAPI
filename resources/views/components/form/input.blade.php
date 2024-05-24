@props([
    'label',
    'name',
    'model',
    'required' => false,
    'type' => 'text',
    'icon' => ''
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
            autocomplete="off"
            class="bg-transparent outline-none"
            type="{{$type}}"
            id="{{$name}}"
            wire:model="{{$model}}"
            @if ($required) required @endif >
    </div>
</div>
