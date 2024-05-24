<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PointResource;
use App\Models\Point;
use App\Models\School;
use Illuminate\Contracts\Database\Query\Builder;

class PointController extends Controller
{
    public function index(School $school) {
        $points = Point::whereHas('student', function (Builder $query) use ($school) {
            $query->where('school_id', $school->id);
        })->get();

        $items = PointResource::collection($points);

        return response()->json([
            'status' => 200,
            $items
        ]);
    }
}
