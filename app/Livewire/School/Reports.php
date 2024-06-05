<?php

namespace App\Livewire\School;

use App\Models\Report;
use App\Models\School;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Reports extends Component
{
    #[Locked]
    public School $school;

    public function getReportsProperty() {
        return Report::where('school_id', $this->school->id)
            ->orderBy('created_at')->paginate(15);
    }

    public function deleteReport(Report $report) {
        $report->delete();
    }

    public function render()
    {
        return view('livewire.school.reports');
    }
}
