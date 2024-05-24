<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = ['id'];

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function points(): hasMany
    {
        return $this->hasMany(Point::class);
    }

    public function cardEntries(): hasMany
    {
        return $this->hasMany(CardEntry::class);
    }
}
