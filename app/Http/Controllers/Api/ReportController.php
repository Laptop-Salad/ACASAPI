<?php

namespace App\Http\Controllers\Api;

use App\Models\Report;
use App\Models\School;
use Illuminate\Http\Request;

class ReportController
{
    public function store(School $school, Request $request) {
        $data = $request->input('data')[0];
        $name = $request->input('name');

        Report::create([
            'school_id' => $school->id,
            'name' => $name,
            'data' => $data
        ]);

        return response()->json([
            'status' => 201,
            'message' => "Custom report created!",
        ], 200);
    }
}
