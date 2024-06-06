<?php

namespace App\Http\Middleware;

use App\Models\School;
use App\Models\SchoolUser;
use App\WithJSONResponse;
use Closure;

class CheckSchoolAccess
{
    use WithJSONResponse;

    public function handle($request, Closure $next)
    {
        $school = $request->route('school');
        $user = auth()->user();

        // May also be triggered by method on routes that do not have that method
        if (!isset($user->id)) {
            return $this->createResponse("not acceptable");
        }

        if (!isset($school->id)) {
            return $this->createResponse("not acceptable");
        }

        $access = SchoolUser::where('user_id', $user->id)
            ->where('school_id', $school->id);

        $access = $access->first();

        if (!$access) {
            return $this->createResponse("forbidden");
        }

        return $next($request);
    }
}
