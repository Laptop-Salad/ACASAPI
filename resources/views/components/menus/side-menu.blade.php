<div class="flex justify-end" x-data="{menuOpen : false}">
    <x-btn x-on:click="menuOpen = true"><i class="fa-solid fa-bars"></i></x-btn>

    <div x-cloak
         x-show="menuOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="translate-x-full"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="flex flex-col min-h-[50vh] space-y-4 bg-pine text-off-white drop-shadow-2xl rounded-md absolute z-20 p-5 w-60">

        <div class="flex justify-end mb-2">
            <x-btn x-on:click="menuOpen = false" :inverse="true"><i class="fa-solid fa-bars"></i></x-btn>
        </div>

        <h3 class="my-4 font-semibold text-xl text-center">Menu</h3>

        {{ $slot }}
    </div>
</div>
