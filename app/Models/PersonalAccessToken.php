<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PersonalAccessToken extends \Laravel\Sanctum\PersonalAccessToken
{
    use HasUuids;

    public $keyType = 'string';

    public $incrementing = false;
}
