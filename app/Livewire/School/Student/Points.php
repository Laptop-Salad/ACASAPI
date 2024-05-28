<?php

namespace App\Livewire\School\Student;

use App\Models\School;
use App\Models\Student;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Points extends Component
{
    #[Locked]
    public School $school;

    #[Locked]
    public Student $student;

    public function render()
    {
        return view('livewire.school.student.points');
    }
}
