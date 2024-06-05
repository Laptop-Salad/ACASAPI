<header class="hidden md:grid grid-cols-2 items-center gap-2 p-5">

    @auth
        <a href="{{ url('/dashboard') }}" class="font-bold text-2xl">ASMS</a>
    @else
        <a href="{{ url('') }}" class="font-bold text-2xl">ASMS</a>
    @endauth

    @if (Route::has('login'))
        <nav class="-mx-3 flex items-center justify-end">
            <a
                href="{{ url('/api-docs') }}"
                class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                API Docs
            </a>
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    <span class="sr-only">Dashboard</span>
                    <i class="fa-solid fa-user"></i>
                </a>
                <a
                    href="{{ url('/logout') }}"
                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    <span class="sr-only">Logout</span>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            @else
                <a
                    href="{{ route('sign-up') }}"
                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    Sign Up
                </a>
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    Log in
                </a>
            @endauth
        </nav>
    @endif
</header>

<header class="p-5 md:hidden flex justify-end" x-data="{navbarOpen : false}">
    <x-btn x-on:click="navbarOpen = true"><i class="fa-solid fa-bars"></i></x-btn>

    <div x-cloak
         x-show="navbarOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="translate-x-full"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         class="flex flex-col min-h-screen space-y-4 bg-pine text-off-white drop-shadow-2xl rounded-md absolute z-20 p-5 w-60">

        <div class="flex justify-end mb-2">
            <x-btn x-on:click="navbarOpen = false" :inverse="true"><i class="fa-solid fa-bars"></i></x-btn>
        </div>

        <a href="{{ url('') }}" class="font-bold text-2xl">ASMS</a>

        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-col items-start justify-center">
                <a
                    href="{{ url('/api-docs') }}"
                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    API Docs
                </a>
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        <span class="sr-only">Dashboard</span>
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a
                        href="{{ url('/logout') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        <span class="sr-only">Logout</span>
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                @else
                    <a
                        href="{{ route('sign-up') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        Sign Up
                    </a>
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                    >
                        Log in
                    </a>
                @endauth
            </nav>
        @endif
    </div>
</header>
