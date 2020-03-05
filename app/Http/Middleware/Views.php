<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\DB;

use Closure;

class Views
{

    public function handle($request, Closure $next)
    {

        $id = $request->id;

        DB::update('update articles set views = views + 1 where id = ?', [$id]);

        return $next($request);
    }
}
