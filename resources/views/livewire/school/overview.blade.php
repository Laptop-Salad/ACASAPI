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
                <x-school.overview.departments :departments="$this->departments" />
                @break
            @case("houses")
                <x-school.overview.houses :houses="$this->houses" />
                @break
            @case("teachers")
                <x-school.overview.teachers :teachers="$this->teachers" />
                @break
            @case("students")
                <x-school.overview.students :students="$this->students" />
                @break
        @endswitch
    </div>
</div>
