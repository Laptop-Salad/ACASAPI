<div class="bg-off-white text-pine min-h-screen">
    <x-navigation />

    <div class="p-5">
        <h1 class="text-2xl font-bold">Manage {{ $school->name }}</h1>
        <x-side-menu>
            <x-x-side-menu-link :href="route('school', $school)" icon="fa-solid fa-school">
                Overview
            </x-x-side-menu-link>

            <x-x-side-menu-link :href="route('school.manage', $school)" icon="fa-solid fa-gear" :active="true">
                Manage
            </x-x-side-menu-link>
        </x-side-menu>

        <div class="mt-4">
            <div>
                <form wire:submit="saveDepartment">
                    <x-form.input
                        model="department_form.name"
                        type="text"
                        class="p-2 md:w-1/3"
                        icon="fa-solid fa-building-user me-2"
                        label="Department Name"
                        name="department_name" required />
                    <div>
                        <x-btn class="ms-2" type="submit">Add</x-btn>
                    </div>
                </form>
            </div>
            <div class="mt-4">
                <form wire:submit="saveHouse">
                    <x-form.input
                        model="house_form.name"
                        type="text"
                        class="p-2 md:w-1/3"
                        icon="fa-solid fa-house me-2"
                        label="House Name"
                        name="house_name" required />
                    <div>
                        <x-btn class="ms-2" type="submit">Add</x-btn>
                    </div>
                </form>
            </div>
            <div class="mt-4">
                <form wire:submit="saveTeacher">
                    <x-form.input
                        model="teacher_form.name"
                        type="text"
                        icon="fa-solid fa-chalkboard-user me-2"
                        class="p-2 md:w-1/3"
                        label="Teacher Name"
                        name="teacher_name" required />

                    <x-form.input
                        model="teacher_form.special_role"
                        type="text"
                        icon="fa-solid fa-id-badge me-2"
                        class="p-2 md:w-1/3"
                        label="Special Role"
                        name="special_role" />

                    <div class="flex space-x-2">
                        <select class="border-2 border-pine rounded-md ms-2" wire:model="teacher_form.department_id" required>
                            <option value="">None Selected</option>

                            @foreach($this->departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                        <x-btn type="submit">Add</x-btn>
                    </div>
                </form>
            </div>
            <div class="mt-4">
                <form wire:submit="saveStudent">
                    <x-form.input
                        model="student_form.name"
                        type="text"
                        icon="fa-solid fa-user me-2"
                        class="p-2 md:w-1/3"
                        label="Student Name"
                        name="student_name" required />

                    <div class="flex space-x-2">
                        <select class="border-2 border-pine rounded-md ms-2" wire:model="student_form.house_id" required>
                            <option value="">None Selected</option>

                            @foreach($this->houses as $house)
                                <option value="{{$house->id}}">{{$house->name}}</option>
                            @endforeach
                        </select>
                        <x-btn type="submit">Add</x-btn>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
