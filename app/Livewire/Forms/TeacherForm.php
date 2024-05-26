<?php

namespace App\Livewire\Forms;

use App\Models\Teacher;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TeacherForm extends Form
{
    #[Validate(['required', 'exists:schools,id'])]
    public $school_id;
    #[Validate(['nullable', 'exists:departments,id'])]
    public $department_id;

    #[Validate(['required', 'string'])]
    public $name;

    #[Validate(['nullable', 'string'])]
    public $special_role;

    public function save() {
        $this->validate();
        Teacher::create($this->all());
        $this->reset();
    }
}
