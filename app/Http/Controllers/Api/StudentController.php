<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $items = StudentResource::collection(Student::all());
        return response()->json($items);
    }

    public function show(string $id)
    {
        $items = new StudentResource(Student::where('id', $id)->first());
        return response()->json($items);
    }
}
