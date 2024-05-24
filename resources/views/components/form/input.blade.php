@props([
    'label',
    'name',
    'model',
    'required' => false,
    'type' => 'text',
    'icon' => ''
])

<div {{ $attributes }}>
    <div class="border-2 border-pine flex p-2 rounded-md">
        <label class="me-1 font-semibold" for="{{$name}}">
            <i class="{{$icon}}"></i>
            {{$label}} {{$required ? "*" : "" }}:
        </label>

        <input
            autocomplete="off"
            class="bg-transparent outline-none"
            type="{{$type}}"
            id="{{$name}}"
            wire:model="{{$model}}"
            @if ($required) required @endif >
    </div>
</div>
