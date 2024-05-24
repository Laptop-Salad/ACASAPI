<?php

namespace App\Livewire\Forms;

use App\Models\House;
use Livewire\Attributes\Validate;
use Livewire\Form;

class HouseForm extends Form
{
    #[Validate(['required', 'exists:schools,id'])]
    public $school_id;

    #[Validate(['required', 'string'])]
    public $name;

    public function save() {
        $this->validate();
        House::create($this->all());
        $this->reset();
    }}
