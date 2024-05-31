<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\School;
use App\Models\Student;
use App\WithJSONResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use WithJSONResponse;

    public function index(Request $request, School $school) : JsonResponse
    {
        $students = $school->students;
        $items = StudentResource::collection($students);

        return $this->createResponse("ok", $items);
    }

    public function show(School $school, Student $student) : JsonResponse
    {
        $student = Student::where('school_id', $school->id)->where('id', $student->id)->first();

        if (!isset($student)) {
            return $this->createResponse("not found", null, 'Student not found');
        }

        $items = new StudentResource($student);
        return $this->createResponse("ok", $items);
    }
}
