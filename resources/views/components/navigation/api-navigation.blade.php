<header class="grid grid-cols-2 items-center gap-2 p-5">

    <a href="{{ url('api-docs') }}" class="font-bold text-2xl">ASMS API Docs</a>

    <nav class="-mx-3 flex items-center justify-end">
        @auth
            <a
                href="{{ route('dashboard') }}"
                class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                <span class="sr-only">Dashboard</span>
                <i class="fa-solid fa-user"></i>
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Log in
            </a>
        @endauth
    </nav>
</header>
