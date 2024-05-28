@props(['active', 'school'])

<x-menus.side-menu>
    <x-menus.side-menu-link :href="route('school', $school)" icon="fa-solid fa-school" :active="$active == 'overview'">
        Overview
    </x-menus.side-menu-link>

    <x-menus.side-menu-link :href="route('school.manage', $school)" icon="fa-solid fa-gear" :active="$active == 'manage'">
        Manage
    </x-menus.side-menu-link>
</x-menus.side-menu>
