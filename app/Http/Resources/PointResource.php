<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PointResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'points' => $this->points,
            'comment' => $this->comment,
            'student_card_number' => $this->student_id,
            'teacher_card_number' => $this->teacher_id,
            'type' => $this->type,
        ];
    }
}
