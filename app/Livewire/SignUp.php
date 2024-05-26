<?php

namespace App\Livewire;

use App\Livewire\Forms\SignUpForm;
use Livewire\Component;

class SignUp extends Component
{
    public SignUpForm $form;

    public function submitForm() {
        if ($this->form->save()) {
            return $this->redirect("/login");
        }
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}
