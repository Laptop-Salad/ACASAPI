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
                    'total' => $this->points->where('type', 'Behaviour')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Behaviour')->get()),
                ],
                'grades' => [
                    'total' => $this->points->where('type', 'Grades')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Grades')->get()),
                ],
                'attendance' => [
                    'total' => $this->points->where('type', 'Attendance')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Attendance')->get()),
                ],
                'others' => [
                    'total' => $this->points->where('type', 'Others')->sum('points'),
                    'history' => PointResource::collection(Point::where('student_id', $this->id)->where('type', 'Others')->get()),
                ],
            ]
        ];
    }
}
