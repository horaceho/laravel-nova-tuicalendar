<?php

namespace Horaceho\Tuicalendar\Http\Middleware;

use Horaceho\Tuicalendar\Tuicalendar;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(Tuicalendar::class)->authorize($request) ? $next($request) : abort(403);
    }
}
