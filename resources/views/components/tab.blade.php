@props([
    'current_tab',
    'this_tab',
])

<button
    {{$attributes}}
    class="{{ $current_tab == $this_tab ? "bg-pine text-off-white" : ''}}
                border-2 border-pine hover:bg-pine hover:text-off-white hover:cursor-pointer p-5 font-bold text-xl rounded-md">
    {{$slot}}
</button>
