<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasUuids;

    protected $guarded = ['id'];

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class, 'school_users');
    }

    public function departments() : HasMany {
        return $this->hasMany(Department::class);
    }

    public function houses() : HasMany {
        return $this->hasMany(House::class);
    }

    public function teachers() : HasMany {
        return $this->hasMany(Teacher::class);
    }

    public function students() : HasMany {
        return $this->hasMany(Student::class);
    }
}
