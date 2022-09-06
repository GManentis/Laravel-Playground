<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /*
        if we want to return sth from middleware it must always be response() type else errors will occur.This applies even in views (views can be returned normally in controller as expected)
        */
        //return response()->view("welcome");

        /*
        we can use echo just like in controllers. Echo generally is not suggested in laravel to be used.
        The case is that if echo in laravel and yet we return json (response()->json()) , json errors will occur(this applies to controllers as well). 
        Echo + return view(...) wont cause troubles
        IMPORTANT TIP: Always when we send responses to client, always make sure that one response is sent at the time!!! Use return response() and not response() on its own
        response without return can be used freely if there is no code that returns another response or the response is last statement
        */

        echo "hhtg5"; 
       
        return $next($request);

        /*
        if we dont use return in the above case (return $next($request)), the middleware will first run the echo and then will go to controller for the process. After the controller process is done
        laravel will return back to the middleware to implement the rest of the code. 
        */
        //error_log('hi')
    }
}
