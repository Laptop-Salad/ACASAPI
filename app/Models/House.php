<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    protected $guarded = ['id'];

    public function students() : HasMany {
        return $this->hasMany(Student::class);
    }
}
