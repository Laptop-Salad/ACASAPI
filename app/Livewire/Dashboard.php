<?php

namespace App\Livewire;

use App\Livewire\Forms\SchoolForm;
use Livewire\Component;

class Dashboard extends Component
{
    public SchoolForm $form;

    public $token_created;
    public $show_create_school = false;

    public function createSchool() {
        $this->form->save();
        $this->show_create_school = false;
        $this->form->reset();
    }

    public function showCreateSchool() {
        $this->form->reset();
        $this->show_create_school = true;
    }

    public function getSchoolsProperty() {
        return auth()->user()->schools;
    }

    public function generateToken() {
        $token = auth()->user()->createToken('api-token');
        $this->token_created = $token->plainTextToken;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
