<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Admin;

class checkProfile
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

        $id = auth()->user()->id;

        if(auth()->user()->role === 'siswa') {
           $checkProfile =  Siswa::where('user', $id)->exists();
        } else {
            $checkProfile =  Admin::where('user', $id)->exists();
        }

        if(!$checkProfile) {
            return redirect('/daftar');
        } 

        return $next($request);
    }
}
