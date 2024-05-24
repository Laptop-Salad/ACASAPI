<div class="bg-off-white text-pine min-h-screen">
    <x-navigation />

    <div class="p-5">
        <h1 class="text-4xl font-bold">{{ $school->name }}</h1>
        <x-side-menu>
            <x-x-side-menu-link :href="route('school', $school)" icon="fa-solid fa-school" :active="true">
                Overview
            </x-x-side-menu-link>

            <x-x-side-menu-link :href="route('school.manage', $school)" icon="fa-solid fa-gear">
                Manage
            </x-x-side-menu-link>
        </x-side-menu>

        <div class="my-10 flex flex-col md:flex-row md:space-x-4 md:space-y-0 space-y-4">
            <a
                wire:click="changeTab('departments')"
                class="{{ $this->current_tab == "departments" ? "bg-pine text-off-white" : ''}}
                border-2 border-pine hover:bg-pine hover:text-off-white hover:cursor-pointer p-5 font-bold text-xl rounded-md">
                {{ $school->departments->count() }}
                Departments
            </a>
            <a
                wire:click="changeTab('houses')"
                class="{{ $this->current_tab == "houses" ? "bg-pine text-off-white" : ''}}
                border-2 border-pine hover:bg-pine hover:text-off-white hover:cursor-pointer p-5 font-bold text-xl rounded-md">
                {{ $school->houses->count() }}
                Houses
            </a>
            <a
                wire:click="changeTab('teachers')"
                class="{{ $this->current_tab == "teachers" ? "bg-pine text-off-white" : ''}}
                border-2 border-pine hover:bg-pine hover:text-off-white hover:cursor-pointer p-5 font-bold text-xl rounded-md">
                {{ $school->teachers->count() }}
                Teachers
            </a>
            <a
                wire:click="changeTab('students')"
                class="{{ $this->current_tab == "students" ? "bg-pine text-off-white" : ''}}
                border-2 border-pine hover:bg-pine hover:text-off-white hover:cursor-pointer p-5 font-bold text-xl rounded-md">
                {{ $school->students->count() }}
                Students
            </a>
        </div>

        @switch($this->current_tab)
            @case("departments")
                <div class="relative overflow-x-auto rounded-t-md">
                    <table class="table-fixed w-full">
                        <thead class="bg-pine text-white">
                        <th class="text-start p-2">Name</th>
                        <th class="text-start p-2">Teachers</th>
                        </thead>
                        <tbody>
                        @foreach($this->departments as $department)
                            <tr class="border-b-2 border-pine/50">
                                <td class="p-2 font-semibold">{{$department->name}}</td>
                                <td class="p-2 font-semibold">{{$department->teachers->count()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @break
            @case("houses")
                <div class="relative overflow-x-auto rounded-t-md">
                    <table class="table-fixed w-full">
                        <thead class="bg-pine text-white">
                        <th class="text-start p-2">Name</th>
                        <th class="text-start p-2">Students</th>
                        </thead>
                        <tbody>
                        @foreach($this->houses as $house)
                            <tr class="border-b-2 border-pine/50">
                                <td class="p-2 font-semibold">{{$house->name}}</td>
                                <td class="p-2 font-semibold">{{$house->students->count()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @break
            @case("teachers")
                <div class="relative overflow-x-auto rounded-t-md">
                    <table class="table-fixed w-full">
                        <thead class="bg-pine text-white">
                        <th class="text-start p-2">Name</th>
                        <th class="text-start p-2">Department</th>
                        <th class="text-start p-2">Special Role</th>
                        </thead>
                        <tbody>
                        @foreach($this->teachers as $teacher)
                            <tr class="border-b-2 border-pine/50">
                                <td class="p-2 font-semibold">{{$teacher->name}}</td>
                                <td class="p-2 font-semibold">{{$teacher->department->name}}</td>
                                <td class="p-2 font-semibold">{{$teacher->special_role}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @break
            @case("students")
                <div class="relative overflow-x-auto rounded-t-md">
                    <table class="table-fixed w-full">
                        <thead class="bg-pine text-white">
                        <th class="text-start p-2">Name</th>
                        <th class="text-start p-2">House</th>
                        </thead>
                        <tbody>
                        @foreach($this->students as $student)
                            <tr class="border-b-2 border-pine/50">
                                <td class="p-2 font-semibold">{{$student->name}}</td>
                                <td class="p-2 font-semibold">{{$student->house->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @break
        @endswitch
    </div>
</div>
