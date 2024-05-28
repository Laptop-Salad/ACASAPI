<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class StudentController extends Controller
{
    public function index(Request $request, School $school)
    {
        $students = $school->students;
        $sort = $request->input('sort');
        $column = ltrim($sort, '-');

        $custom_sorts = ['performance'];

        // todo: clean this up
        if (Schema::connection('mysql')->hasColumn("students", $column)) {
            if ($sort[0] === "-") {
                $students = $students->sortByDesc($column);
            } else {
                $students = $students->sortBy($column);
            }
        } else if (in_array($column, $custom_sorts)) {
            if ($sort[0] === "-") {
                $students = $students->sortBy(function ($student) {
                    return $student->points->sum('points');
                }, SORT_REGULAR, true);
            } else {
                $students = $students->sortBy(function ($student) {
                    return $student->points->sum('points');
                }, SORT_REGULAR);
            }
        } else if (isset($sort)) {
            return response()->json([
                'status' => 400,
                'message' => 'Column does not exist. Please check out our docs!'
            ]);
        }

        $items = StudentResource::collection($students);

        return response()->json([
            'status' => 200,
            'items' => $items
        ]);
    }

    public function show(School $school, string $id)
    {
        $student = Student::where('school_id', $school->id)->where('id', $id)->first();

        if (!$student) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        $items = new StudentResource($student);
        return response()->json([
            'status' => 200,
            $items
        ]);
    }
}
