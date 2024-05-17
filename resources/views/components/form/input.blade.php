@props(['label', 'name', 'model','required' => true, 'type' => 'text'])

<div>
    <div class="bg-slate-200 flex p-2 my-2 rounded-sm">
        <label class="text-gray-500 me-1" for="{{$label}}">{{$name}} {{$required ? "*" : "" }}:</label>

        <input class="bg-transparent outline-none" type="{{$type}}" id="{{$label}}" wire:model="{{$model}}" required="{{$required}}">
    </div>
</div>
