<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DipMiddleware
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
        ////akhane logic likhte hoy
        
        $array=[
            "Bangladesh",
            "India",
            "Japan",
            "Vutan",
            "America"
        ];

        if(in_array($request->country , $array)) { //////jokhon ami amar browser a  (/country?country=Bangladesh) aita likhe hit korbo tokhon ami amar page ta dekhte pabo...akhane /country hocche amar route ar nam abong country= hocche peramiter jar maddhome ami browser theke peramiter pass korchi abong aikhane country shei ta reaceive korche abong peramiter ar value jodi amar array ar moddhe thake tahole she oi page ta return korbe.....r na thakle niche chole jabe abong rederect kore debe / route a  
            return $next($request);
        }

        return redirect()->to('/');
        
        
    }
}
