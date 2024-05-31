<?php

namespace App\Livewire\School\Student;

use App\Livewire\Forms\PointsForm;
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

    public PointsForm $form;

    // todo: reuse
    public function mount() {
        if ($this->student->school_id !== $this->school->id) {
            abort(403);
        }
    }

    public function savePoint() {
        // todo: change when we implement user roles
        $this->form->student_id = $this->student->id;
        $this->form->teacher_id = $this->school->teachers->first()->id;
        $this->form->save();
        $this->form->reset();
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.school.student.points');
    }
}
