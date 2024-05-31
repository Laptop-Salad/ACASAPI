<?php

namespace App\School\CardEntries;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

trait Sortable
{
    public $custom_sorts = ['performance'];

    public function applySort(Request $request, Collection $students) : ?Collection {
        $sort = $request->input('sort');

        if (!isset($sort)) {
            return $students;
        }

        $column = ltrim($sort, '-');

        // Built in sort
        if (Schema::connection('mysql')->hasColumn("students", $column)) {
            return $this->applyBuiltSort($students, $sort, $column);
        // Custom sort
        } else if (in_array($column, $this->custom_sorts)) {
            return $this->applyPerformanceSort($students, $sort);
        // Neither built in nor custom sort
        } else {
            return null;
        }
    }

    public function applyPerformanceSort(Collection $students, $sort) {
        if ($sort[0] === "-") {
            return $students->sortBy(function ($student) {
                return $student->points->sum('points');
            }, SORT_REGULAR, true);
        } else {
            return  $students->sortBy(function ($student) {
                return $student->points->sum('points');
            }, SORT_REGULAR);
        }
    }

    public function applyBuiltSort(Collection $students, $sort, $column) : Collection {
        // If descending
        if ($sort[0] === "-") {
            return $students->sortByDesc($column);
        } else {
            return $students->sortBy($column);
        }
    }
}
