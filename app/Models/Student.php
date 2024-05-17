<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }

    public function points(): hasMany
    {
        return $this->hasMany(Point::class);
    }
}
