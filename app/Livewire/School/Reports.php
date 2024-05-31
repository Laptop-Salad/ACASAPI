<?php

namespace App\Livewire\School;

use App\Models\School;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Reports extends Component
{
    #[Locked]
    public School $school;

    public function getReportsProperty() {
        return $this->school->reports->sortBy('created_at');
    }

    public function render()
    {
        return view('livewire.school.reports');
    }
}
