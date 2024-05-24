<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardEntryResource;
use App\Models\CardEntry;
use App\Models\School;
use Carbon\Carbon;

class CardEntryController extends Controller
{
    public function index(School $school) {
        $items = $school->students->flatMap(function ($student) {
            return $student->cardEntries;
        });

        $items = CardEntryResource::collection($items);
        return response()->json($items);
    }

    public function show(School $school, CardEntry $card_entry) {
        if (!isset($card_entry->student->school)) {
            return response()->json([
                'status' => 404,
                'Not found'
            ]);
        }

        $items = new CardEntryResource($card_entry);
        return response()->json([
            'status' => 200,
            $items
        ]);
    }

    public function byDate(School $school, string $date) {
        try {
            $date = Carbon::createFromFormat('dmY', $date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        $items = CardEntryResource::collection(CardEntry::whereDate('time', $date)->get());
        return response()->json($items);
    }
}
