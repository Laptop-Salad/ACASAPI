<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardEntry extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'time' => 'datetime',
    ];

    public function student(): BelongsTo {
        return $this->belongsTo(Student::class);
    }
}
