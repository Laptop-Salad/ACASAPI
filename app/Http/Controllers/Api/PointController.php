<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PointResource;
use App\Models\Point;

class PointController extends Controller
{
    public function index() {
        $items = PointResource::collection(Point::all());
        return response()->json($items);
    }
}
