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

                <section id="intro" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Introduction</h3>

                    <p>
                        Welcome to the ASMS (Academic Score Management System) API documentation. If you follow the instructions and code
                        examples below you can have your own school setup and start making API requests in minutes!
                    </p>

                    <p>
                        Let's go into some details about what this API can do.
                    </p>

                    <p>
                        If you need an API where you need to be able to store and manage data about a school then this is your solution.
                        This API and it's management dashboard was created for a college IOT team project as our project required a list of
                        fake data about students, their performance, and the ability to store card entries of when they enter the school.
                    </p>
                </section>

                <section id="getting-access" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Getting Access</h3>

                    <p>
                        In order to get a token to use our API you must first
                        <a href="{{route('sign-up')}}" class="text-blue-500 font-bold">create an account</a> with us. The next
                        step is to click on the "Gimme Token" button to get your token. Remember to save this somewhere save as it
                        cannot be regenerated.
                    </p>

                    <p>
                        Next you should create a school and populate with data by clicking on the school you created, clicking on the
                        hamburger menu and selecting "Manage".
                    </p>
                </section>

                <section id="example-response" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Example Response</h3>

                    <p>
                        Here is an example of what the API response might look like if you request all the students from
                        a school.

                        <x-api-docs.code-blocks.example-response />

                        History would include an array of how many points were awarded to a student, the teacher that awarded it and
                        why they were awarded those points.
                    </p>
                </section>
            </section>

            <section class="my-10">
                <h2 class="font-bold text-2xl">Endpoints</h2>
                <hr class="h-px mb-8 mt-2 bg-pine/50 border-0">

                <section id="schools" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Schools</h3>

                    <p>
                        This is not really an endpoint but is a base of all your requests, so I felt it was necessary
                        to talk about it in this section. When you create a school you can click to go to see the overview
                        of the school. In the URL it should be <x-api-docs.technical>schools/{school id}</x-api-docs.technical>.
                        Copy this school id so that you can use it in a request.
                    </p>

                    <p>
                        All requests have to be prefixed with <x-api-docs.technical>schools/{school id}</x-api-docs.technical>
                        . The response you get will only be the data attached to that school.
                    </p>
                </section>

                <section id="students" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Students</h3>

                    <div class="relative overflow-x-auto">
                        <table class="table-fixed w-full">
                            <thead class="bg-sage border-b-2 border-pine text-white font-normal">
                            <th class="text-start p-2 font-normal">Endpoint</th>
                            <th class="text-start p-2 font-normal">Description</th>
                            <th class="text-start p-2 font-normal">Methods</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2"><x-api-docs.technical>/students</x-api-docs.technical></td>
                                    <td class="p-2">Get all students in a given school.</td>
                                    <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
                                </tr>
                                <tr>
                                    <td class="p-2"><x-api-docs.technical>/students/{student uuid}</x-api-docs.technical></td>
                                    <td class="p-2">Get a single student.</td>
                                    <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
                                </tr>
                                <tr>
                                    <td class="p-2"><x-api-docs.technical>/students/{student uuid}/card-entries</x-api-docs.technical></td>
                                    <td class="p-2">
                                        Get or upload to a single students card entries. By doing:
                                        <span class="block"><x-api-docs.technical>{ date : ddmmyyyy hhiiss }</x-api-docs.technical>.</span>
                                    </td>
                                    <td class="p-2 space-x-2">
                                        <x-api-docs.technical>GET</x-api-docs.technical>
                                        <x-api-docs.technical>POST</x-api-docs.technical>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="card-entries" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Card Entries</h3>

                    <div class="relative overflow-x-auto">
                        <table class="table-fixed w-full">
                            <thead class="bg-sage border-b-2 border-pine text-white font-normal">
                            <th class="text-start p-2 font-normal">Endpoint</th>
                            <th class="text-start p-2 font-normal">Description</th>
                            <th class="text-start p-2 font-normal">Methods</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="p-2"><x-api-docs.technical>/card-entries</x-api-docs.technical></td>
                                <td class="p-2">Get all card entries for a given school.</td>
                                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
                            </tr>
                            <tr>
                                <td class="p-2"><x-api-docs.technical>/card-entries/date/{date}</x-api-docs.technical></td>
                                <td class="p-2">Get all the card entries for a given date in the format:
                                    <x-api-docs.technical>DDMMYYY</x-api-docs.technical>.</td>
                                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
                            </tr>
                            <tr>
                                <td class="p-2"><x-api-docs.technical>/card-entries/{card entry id}</x-api-docs.technical></td>
                                <td class="p-2">Get a card entry by ID.</td>
                                <td class="p-2 space-x-2">
                                    <x-api-docs.technical>GET</x-api-docs.technical>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

                <section id="points" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Points</h3>

                    <div class="relative overflow-x-auto">
                        <table class="table-fixed w-full">
                            <thead class="bg-sage border-b-2 border-pine text-white font-normal">
                            <th class="text-start p-2 font-normal">Endpoint</th>
                            <th class="text-start p-2 font-normal">Description</th>
                            <th class="text-start p-2 font-normal">Methods</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="p-2"><x-api-docs.technical>/points</x-api-docs.technical></td>
                                <td class="p-2">Get all point entries for a given school.</td>
                                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </section>

            <section class="my-10">
                <h2 class="font-bold text-2xl">Code Examples</h2>
                <hr class="h-px mb-8 mt-2 bg-pine/50 border-0">

                <section id="python" class="space-y-4 my-4">
                    <h3 class="font-semibold text-xl">Python</h3>

                    <p>
                        Here is a simple example of making an API request in python to get all the students of a school.
                    </p>

                    <x-api-docs.code-blocks.getting-access />

                    <p>In the above code we are getting the token and school id from an environment variables Then we are saving the start
                        of the url to a variable as that part is repetitive. Then we are constructing our header and putting the token as the value
                        of the 'authorization' key. Then we are making a request to get all the students in our school and converting it to JSON.
                    </p>
                </section>
            </section>
        </div>
    </div>
</div>
