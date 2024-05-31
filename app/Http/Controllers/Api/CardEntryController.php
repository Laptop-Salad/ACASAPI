<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardEntryResource;
use App\Models\CardEntry;
use App\Models\School;
use App\School\CardEntries\Sortable;
use App\WithJSONResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CardEntryController extends Controller
{
    use WithJSONResponse;
    use Sortable;

    public function index(Request $request, School $school) {
        $students = $this->applySort($request, $school->students);

        $items = $students->flatMap(function ($student) {
            return $student->cardEntries;
        });

        $items = CardEntryResource::collection($items);
        return $this->createResponse("ok", $items);
    }

    public function show(School $school, CardEntry $card_entry) {
        if (!isset($card_entry->student->school)) {
            return response()->json([
                'status' => 404,
                'Not found'
            ]);
        }

        $items = new CardEntryResource($card_entry);
        return $this->createResponse("ok", $items);
    }

    public function byDate(School $school, string $date) {
        try {
            $date = Carbon::createFromFormat('dmY', $date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        $items = CardEntryResource::collection(CardEntry::whereDate('time', $date)->get());
        return $this->createResponse("ok", $items);
    }
}
