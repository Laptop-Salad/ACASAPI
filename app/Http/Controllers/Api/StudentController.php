<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\School;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(School $school)
    {
        $students = $school->students;

        $items = StudentResource::collection($students);
        return response()->json([
            'status' => 200,
            $items
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
