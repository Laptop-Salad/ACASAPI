<?php

namespace App\Livewire\School;

use App\Models\Department;
use App\Models\House;
use App\Models\School;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Url;
use Livewire\Component;

class Overview extends Component
{
    #[Locked]
    public School $school;

    #[Url]
    public $current_tab = "departments";

    function getDepartmentsProperty() {
        return $this->school->departments;
    }

    function getTeachersProperty() {
        return $this->school->teachers;
    }

    function getHousesProperty() {
        return $this->school->houses;
    }

    function getStudentsProperty() {
        return $this->school->students;
    }

    function changeTab($tab) {
        $this->current_tab = $tab;
    }

    public function render()
    {
        return view('livewire.school.overview');
    }
}
