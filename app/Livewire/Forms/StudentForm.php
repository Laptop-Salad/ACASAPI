<?php

namespace App\Livewire\Forms;

use App\Models\Student;
use Livewire\Attributes\Validate;
use Livewire\Form;

// todo: write middleware for API, test API

class StudentForm extends Form
{
    #[Validate(['required', 'exists:schools,id'])]
    public $school_id;

    #[Validate(['required', 'exists:houses,id'])]
    public $house_id;

    #[Validate(['required', 'string'])]
    public $name;

    public function save() {
        $this->validate();
        Student::create($this->all());
        $this->reset();
    }
}
