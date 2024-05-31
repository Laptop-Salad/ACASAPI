<?php

namespace App\Livewire\School;

use App\Models\Report;
use App\Models\School;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ShowReport extends Component
{
    #[Locked]
    public School $school;

    #[Locked]
    public Report $report;

    public function render()
    {
        return view('livewire.school.show-report');
    }
}
