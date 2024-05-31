<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CardEntryResource;
use App\Http\Resources\PointResource;
use App\Models\School;
use App\Models\Student;

class StudentPointController
{
    public function index(School $school, Student $student) {
        if ($student->school_id === $school->id) {
            $items = PointResource::collection($student->points);
        } else {
            return response()->json([
                'status' => 403,
            ]);
        }

        return response()->json([
            'status' => 200,
            $items
        ]);
    }

    public function total(School $school, Student $student) {
        if ($student->school_id === $school->id) {
            $items = $student->points->sum('points');
        } else {
            return response()->json([
                'status' => 403,
            ]);
        }

        return response()->json([
            'status' => 200,
            $items
        ]);
    }
}
