<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use DB;
use Session;
session_start();
class LockScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function lock()
    {
        if(!Auth::check())
            {
                return redirect('/');
            }
        if(Auth::check()){
            Session::put('locked', true);

            return view('Admin.lockscreen');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unlock(Request $request)
    {
        $items = $request->validate([
          'password' => 'required|min:4'
        ]);
        $password = $request->password;

        if(\Hash::check($password,\Auth::user()->password))
        {
            \Session::forget('locked');
            return redirect('/admin-dashboard');
        }
         return Redirect::to('AwOHc9PSIsIm1hYyI6IjY0YWE4ZDNhNDI0NzFjZTEyZDQ3MWM3OeyJpdiI6Im40bm1qcXBVRXVtbjRNaTZLNmc5R0E9PSIsInZhbHVlIjoiUlZNUG1wTnlhN2hcLzFOUkFNaXAwOHc9PSIsIm1hYyI6IjY0YWE4ZDNhNDI0NzFjZTEyZDQ3MWM3OTBmZjI3ZWU5Y2IxNzI5OWMzMDJjZDA5ZmE0NmVlYmM4ZDE4NzlhNzUifQ==')->withErrors([
            'fa' => [trans('auth.mismatch')], ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
