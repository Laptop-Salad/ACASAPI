<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardEntryResource;
use App\Models\CardEntry;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentCardEntryController extends Controller
{
    public function index(string $id) {
        try {
            $student = Student::where('id', $id);
        } catch (\Exception $e) {
            return response()->json('Student not found');
        }

        $items = CardEntryResource::collection(CardEntry::where('student_id', $id)->get());
        return response()->json($items);
    }

    public function store(string $id, Request $request) {
        try {
            $date = Carbon::createFromFormat('dmY His', $request->date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        $student = Student::where('id', $id)->first();

        dump($student);

        if (!$student) {
            return response()->json('Student not found');
        }

        $card_entry = CardEntry::create([
            'time' => $date,
            'student_id' => $student->id,
        ]);

        return response()->json([
            'status' => true,
            'message' => "Card Entry Created!",
            'card_entry' => $card_entry
        ], 200);
    }
}
