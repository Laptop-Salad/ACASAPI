<div class="bg-off-white text-pine min-h-screen">
    <x-navigation.navigation />

    <div class="p-5">
        <h1 class="text-4xl font-bold">{{ $school->name }}</h1>

        <x-school.menu active="overview" :$school />

        <x-tabs>
            <x-tab wire:click="changeTab('departments')" this_tab="departments" :current_tab="$this->current_tab">
                {{ $school->departments->count() }}
                Departments
            </x-tab>
            <x-tab wire:click="changeTab('houses')" this_tab="houses" :current_tab="$this->current_tab">
                {{ $school->houses->count() }}
                Houses
            </x-tab>
            <x-tab wire:click="changeTab('teachers')" this_tab="teachers" :current_tab="$this->current_tab">
                {{ $school->houses->count() }}
                Teachers
            </x-tab>
            <x-tab wire:click="changeTab('students')" this_tab="students" :current_tab="$this->current_tab">
                {{ $school->students->count() }}
                Students
            </x-tab>
        </x-tabs>

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
                        <th class="text-start p-2">Points</th>
                        </thead>
                        <tbody>
                        @foreach($this->students as $student)
                            <tr class="border-b-2 border-pine/50">
                                <td class="p-2 font-semibold">
                                    <a class="text-blue-500 font-semibold"
                                       href="{{route('school.student.points', [$this->school, $student])}}">
                                        {{$student->name}}
                                    </a>
                                </td>
                                <td class="p-2 font-semibold">{{$student->house->name}}</td>
                                <td class="p-2">{{$student->points->sum('points')}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @break
        @endswitch
    </div>
</div>
