<?php

namespace App\Livewire\School;

use App\Livewire\Forms\DepartmentForm;
use App\Livewire\Forms\HouseForm;
use App\Livewire\Forms\StudentForm;
use App\Livewire\Forms\TeacherForm;
use App\Models\Department;
use App\Models\House;
use App\Models\School;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Overview extends Component
{
    #[Locked]
    public School $school;

    public DepartmentForm $department_form;
    public TeacherForm $teacher_form;
    public HouseForm $house_form;
    public StudentForm $student_form;

    public function saveDepartment() {
        $this->department_form->school_id = $this->school->id;
        $this->department_form->save();
    }

    public function saveTeacher() {
        $this->teacher_form->school_id = $this->school->id;
        $this->teacher_form->save();
    }

    public function saveHouse() {
        $this->house_form->school_id = $this->school->id;
        $this->house_form->save();
    }
    public function saveStudent() {
        $this->student_form->school_id = $this->school->id;
        $this->student_form->save();
    }

    public function getDepartmentsProperty() {
        return Department::where('school_id', $this->school->id)->get()->sortBy('name');
    }

    public function getHousesProperty() {
        return House::where('school_id', $this->school->id)->get()->sortBy('name');
    }

    public function render()
    {
        return view('livewire.school.overview');
    }
}
