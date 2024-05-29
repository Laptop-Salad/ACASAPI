<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardEntryResource;
use App\Models\CardEntry;
use App\Models\School;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentCardEntryController extends Controller
{
    public function index(School $school, Student $student) {
        if ($student->school_id === $school->id) {
            $items = CardEntryResource::collection($student->cardEntries);
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

    public function store(School $school, Student $student, Request $request) {
        if ($student->school_id !== $school->id) {
            return response()->json([
                'status' => 403,
            ]);
        }

        try {
            $date = Carbon::createFromFormat('dmY His', $request->date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        $card_entry = CardEntry::create([
            'time' => $date,
            'student_id' => $student->id,
        ]);

        return response()->json([
            'status' => 201,
            'message' => "Card Entry Created!",
            'card_entry' => $card_entry
        ], 200);
    }
}
