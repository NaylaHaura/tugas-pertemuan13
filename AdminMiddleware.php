<?php
{
    if (!session()->has('user_id')) {
        return redirect('/login');
    }

    return $next($request);
}
