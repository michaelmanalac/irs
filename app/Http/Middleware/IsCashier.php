<?php

namespace App\Http\Middleware;

use Closure;
use App\Account;
use Illuminate\Support\Facades\Auth;

class IsCashier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $account = Account::where('id', Auth::id())->first();
        if ( $account->account_type_id != 1 ) {
            return redirect('/');
        }
        return $next($request);
    }
}
