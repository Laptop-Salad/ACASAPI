<?php

namespace App\Livewire\Forms;

use App\Models\Department;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DepartmentForm extends Form
{
    #[Validate(['required', 'exists:schools,id'])]
    public $school_id;

    #[Validate(['required', 'string'])]
    public $name;

    public function save() {
        $this->validate();
        Department::create($this->all());
        $this->reset();
    }
}
