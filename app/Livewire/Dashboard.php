<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $token_created;

    public function generateToken() {
        $token = auth()->user()->createToken('api-token');
        $this->token_created = $token->plainTextToken;
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
