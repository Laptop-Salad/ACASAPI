<?php

namespace App\Livewire\School;

use App\Models\CardEntry;
use App\Models\School;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Locked;
use Livewire\Component;

class CardEntries extends Component
{
    #[Locked]
    public School $school;

    public function getCardEntriesProperty() {
        return CardEntry::whereHas('student', function (Builder $q) {
            $q->where('school_id', $this->school->id);
        })->orderByDesc('time')->paginate(15);
    }

    public function deleteEntry(CardEntry $card_entry) {
        $card_entry->delete();
    }

    public function deleteAll() {
        foreach ($this->card_entries as $card_entry) {
            $card_entry->delete();
        }

        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.school.card-entries');
    }
}
