<?php

namespace App\Livewire\Forms;

use App\Models\School;
use App\Models\SchoolUser;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SchoolForm extends Form
{
    #[Validate(['required', 'string'])]
    public $name;

    public function save() {
        $this->validate();

        $school = School::create($this->all());

        // Give creator access to school
        SchoolUser::create([
            'school_id' => $school->id,
            'user_id' => auth()->user()->id,
        ]);
    }
}
