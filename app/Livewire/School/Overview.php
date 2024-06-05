<?php

namespace App\Livewire\School;

use App\Models\Department;
use App\Models\House;
use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Overview extends Component
{
    use WithPagination;

    #[Locked]
    public School $school;

    #[Url]
    public $current_tab = "departments";

    function getDepartmentsProperty() {
        return Department::where('school_id', $this->school->id)
            ->orderBy('name')->paginate(15, ['*'], 'houses');
    }

    function getTeachersProperty() {
        return Teacher::where('school_id', $this->school->id)
            ->orderBy('name')->paginate(15, ['*'], 'houses');
    }

    function getHousesProperty() {
        return House::where('school_id', $this->school->id)
            ->orderBy('name')->paginate(15, ['*'], 'houses');
    }

    function getStudentsProperty() {
        return Student::where('school_id', $this->school->id)
            ->orderBy('name')->paginate(15, ['*'], 'students');
    }

    function changeTab($tab) {
        $this->current_tab = $tab;
    }

    public function render()
    {
        return view('livewire.school.overview');
    }
}
