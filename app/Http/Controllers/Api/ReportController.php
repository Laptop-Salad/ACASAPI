<?php

namespace App\Http\Controllers\Api;

use App\Models\Report;
use App\Models\School;
use Illuminate\Http\Request;

class ReportController
{
    private function verifyStackedBarChart($json) : bool {
        // Stacked bar chart
        // Must have x-axis, name and data
        // x-axis should have categories with an array of strings
        // name should be a string
        // data should be an array of data to put in series

        return true;
    }

    private function verifyScatterChart($json) : bool {
        // Scatter chart
        // Must have y-axis, x-axis, name and data
        // both x and y axis should contain name and type
        // type can be of type points or entrytime
        // name must be a string
        // data should be an array which will be used for series data
        return true;
    }

    private function verifyReport($json) {
        // the root key should be 'stacked-bar-chart' or 'scatter-chart'
        $section_types = ['stacked-bar-chart', 'scatter-chart'];

        foreach ($json as $key => $section) {
            if (!in_array($key, $section_types)) {
                return false;
            }

            switch ($key) {
                case 'stacked-bar-chart':
                    if (!$this->verifyStackedBarChart($json)) {
                        return false;
                    }
                    break;
                case 'scatter-chart':
                    if (!$this->verifyScatterChart($json)) {
                        return false;
                    }

                    break;
            }
        }

        return true;
    }

    public function store(School $school, Request $request) {
        $data = $request->input('data');
        $name = $request->input('name');

        $this->verifyReport($data);

        Report::create([
            'school_id' => $school->id,
            'name' => $name,
            'data' => $data[0],
            'custom' => true,
        ]);

        return response()->json([
            'status' => 201,
            'message' => "Custom report created!",
        ], 200);
    }
}
