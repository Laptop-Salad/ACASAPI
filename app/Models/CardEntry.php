<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardEntry extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'time' => 'datetime',
    ];
}
