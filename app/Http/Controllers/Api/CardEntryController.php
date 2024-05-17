<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CardEntryResource;
use App\Models\CardEntry;
use Carbon\Carbon;

class CardEntryController extends Controller
{
    public function index() {
        $items = CardEntryResource::collection(CardEntry::all());
        return response()->json($items);
    }

    public function byDate(string $date) {
        try {
            $date = Carbon::createFromFormat('dmY', $date);
        } catch (\Exception $e) {
            return response()->json('Invalid datetime');
        }

        $items = CardEntryResource::collection(CardEntry::whereDate('time', $date)->get());
        return response()->json($items);
    }
}
