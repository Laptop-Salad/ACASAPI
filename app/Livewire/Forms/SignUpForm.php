<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SignUpForm extends Form
{
    #[Validate(['required', 'string'])]
    public $name;

    #[Validate(['required', 'email'])]
    public $email;

    #[Validate(['required', 'string'])]
    public $password;

    public function save() {
        $this->validate();

        // Check if email is in use
        $user = User::where('email', $this->email)->first();

        if ($user) {
            $this->addError('error', 'Email is already in use.');
            return false;
        }

        User::create($this->all());
        $this->reset();

        return true;
    }
}
