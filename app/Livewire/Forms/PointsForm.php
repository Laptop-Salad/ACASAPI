<?php

namespace App\Livewire\Forms;

use App\Models\Department;
use App\Models\Point;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PointsForm extends Form
{

    #[Validate(['required', 'exists:students,id'])]
    public $student_id;

    #[Validate(['required', 'exists:teachers,id'])]
    public $teacher_id;

    #[Validate(['required', 'integer'])]
    public $points;

    #[Validate(['required', 'string'])]
    public $type = "Behaviour";

    #[Validate(['required', 'string'])]
    public $comment = "System Points";

    public function save() {
        $this->validate();
        Point::create($this->all());
        $this->reset();
    }
}
