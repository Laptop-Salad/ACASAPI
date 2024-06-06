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

    public function byDate(School $school, Student $student, $date, Request $request) {
        if ($student->school_id !== $school->id) {
            return response()->json([
                'status' => 403,
            ]);
        }

        try {
            $date = Carbon::createFromFormat('dmY', $date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        $card_entry = CardEntry::whereDate('time', $date)->where('student_id', $student->id);

        if ($card_entry->exists()) {
            return response()->json([
                'status' => 200,
                'items' => new CardEntryResource($card_entry->first()),
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Card entry for the specified date not found'
            ], 200);
        }
    }

    public function store(School $school, Student $student, Request $request) {
        if ($student->school_id !== $school->id) {
            return response()->json([
                'status' => 403,
            ], 403);
        }

        try {
            $date = Carbon::createFromFormat('dmY His', $request->date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        // Ensure a card entry does not exist for today
        if (CardEntry::whereDate('time', $date)->where('student_id', $student->id)->exists()) {
            return response()->json([
                'message' => "Card Entry already exists for this day",
            ], 403);
        }

        $card_entry = CardEntry::create([
            'time' => $date,
            'student_id' => $student->id,
        ]);

        return response()->json([
            'message' => "Card Entry Created!",
            'card_entry' => $card_entry
        ], 201);
    }
}
