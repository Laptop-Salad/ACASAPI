<?php

namespace App\Http\Resources;

use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'house' => $this->house->name,
            'card_number' => $this->id,
            'points' => [
                'total' => $this->points->sum('points'),
                'behaviour' => [
                    'total' => Point::where('student_id', $this->id)->where('type', 'Behaviour')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Behaviour')->get()),
                ],
                'grades' => [
                    'total' => Point::where('student_id', $this->id)->where('type', 'Grade')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Grade')->get()),
                ],
                'attendance' => [
                    'total' =>Point::where('student_id', $this->id)->where('type', 'Attendance')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Attendance')->get()),
                ],
                'others' => [
                    'total' => Point::where('student_id', $this->id)->where('type', 'Other')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Other')->get()),
                ],
            ]
        ];
    }
}
