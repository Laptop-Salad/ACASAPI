<?php

namespace App\Http\Middleware;

use App\Models\School;
use App\Models\SchoolUser;
use Closure;

class CheckSchoolAccess
{
    public function handle($request, Closure $next)
    {
        $school = $request->route('school');
        $user = auth()->user();
        $access = SchoolUser::where('user_id', $user->id)
            ->where('school_id', $school->id);

        $access = $access->first();

        if (!$access) {
            return redirect('dashboard');
        }

        return $next($request);
    }
}
