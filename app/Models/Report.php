<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\Locked;

class Report extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'json'
    ];
}
