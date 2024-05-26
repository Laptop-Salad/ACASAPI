@props(['href', 'icon', 'active' => false])

<a href="{{$href}}"
    {{ $attributes }}
   @class([
    'border-b-2 border-off-white' => $active,
    'hover:border-off-white border-b-2 border-transparent' => !$active,
    'p-2'
    ])>
    <i class="{{$icon}} me-2"></i>
    {{ $slot }}
</a>
