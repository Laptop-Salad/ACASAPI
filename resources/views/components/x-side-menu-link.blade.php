@props(['href', 'icon', 'active' => false])

<a href="{{$href}}"
   class="{{ $active ? "border-b-2 border-off-white" : "hover:border-off-white border-b-2 border-transparent" }} pb-2">
    <i class="{{$icon}} me-2"></i>
    {{ $slot }}
</a>
