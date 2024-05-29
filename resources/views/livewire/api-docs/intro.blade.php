<div class="bg-off-white text-pine min-h-screen" x-data="{ hash: window.location.hash }">
    <x-navigation.api-navigation />

    <div class="p-5 grid md:grid-cols-docs-navbar">
        <aside class="h-[90vh]" aria-label="Sidebar">
            <div class="h-full bg-pine text-off-white rounded-md drop-shadow-2xl p-5">
                <div class="flex flex-col space-y-1 my-4">
                    <p class="font-bold">Getting Started</p>

                    <x-menus.side-menu-link
                        href="#intro"
                        icon="fa-solid fa-book-open-reader">
                        Introduction
                    </x-menus.side-menu-link>

                    <x-menus.side-menu-link href="#getting-access" icon="fa-solid fa-lock">
                        Getting Access
                    </x-menus.side-menu-link>

                    <x-menus.side-menu-link href="#example-response" icon="fa-solid fa-copy">
                        Example Response
                    </x-menus.side-menu-link>
                </div>

                <div class="flex flex-col space-y-1 my-4">
                    <p class="font-bold">Endpoints</p>

                    <x-menus.side-menu-link href="#schools" icon="fa-solid fa-school">
                        Schools
                    </x-menus.side-menu-link>
                    <x-menus.side-menu-link href="#students" icon="fa-solid fa-users">
                        Students
                    </x-menus.side-menu-link>
                    <x-menus.side-menu-link href="#card-entries" icon="fa-solid fa-id-card">
                        Card Entries
                    </x-menus.side-menu-link>
                    <x-menus.side-menu-link href="#points" icon="fa-solid fa-ranking-star">
                        Points
                    </x-menus.side-menu-link>
                    <x-menus.side-menu-link href="#custom-reports" icon="fa-solid fa-file-circle-plus">
                        Custom Reports
                    </x-menus.side-menu-link>
                </div>

                <div class="flex flex-col space-y-1 my-4">
                    <p class="font-bold">Code Examples</p>

                    <x-menus.side-menu-link href="#python" icon="fa-brands fa-python">
                        Python
                    </x-menus.side-menu-link>
                </div>
            </div>
        </aside>

        <div class="p-5 h-[96vh] overflow-y-scroll">
            <h1 class="font-black text-4xl mb-4">ASMS API Docs</h1>

            <section class="my-10">
                <h2 class="font-bold text-2xl">Getting Started</h2>
                <hr class="h-px mb-8 mt-2 bg-pine/50 border-0">

                <x-api-docs.intro />

                <x-api-docs.getting-access />

                <x-api-docs.example-response />
            </section>

            <section class="my-10">
                <h2 class="font-bold text-2xl">Endpoints</h2>
                <hr class="h-px mb-8 mt-2 bg-pine/50 border-0">

                <x-api-docs.school />

                <x-api-docs.students />

                <x-api-docs.card-entries />

                <x-api-docs.points />

                <x-api-docs.custom-reports />
            </section>

            <x-api-docs.code-examples />
        </div>
    </div>
</div>
