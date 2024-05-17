<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Point extends Model
{
    protected $guarded = ['id'];

    public function student(): hasOne
    {
        return $this->hasOne(Student::class);
    }

    public function teacher(): hasOne
    {
        return $this->hasOne(Teacher::class);
    }
}
