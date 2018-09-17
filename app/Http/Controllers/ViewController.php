<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //
        $total = DB::table('post_tbl')->count();
        $post_info = DB::table('post_tbl')
                    ->join('users', 'users.id', '=', 'post_tbl.authorid')
                    ->orderBy('post_tbl.created_at', 'desc')
                    ->select('users.name', 'post_tbl.*')
                    ->where('post_tbl.status','=', 1)
                    -> paginate(10);
        if($post_info)
        {
            return view('default', ['allpost' => $post_info,'total'=>$total]);
        }
    }

    public function profile($name)
    {
        $user_view = DB::table('users')
                    ->where('username',$name)
                    ->first();
          if($user_view)
          {
            return view('userprofile',['userinfo'=>$user_view]);
          }
          else
          {
            return view('404') ;
          }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function detailspostview($title)
    {
        //
        $post_info = DB::table('post_tbl')
                    ->join('users', 'users.id', '=', 'post_tbl.authorid')
                    ->select('users.*', 'post_tbl.*')
                    ->where('post_tbl.title','=', $title)
                    ->first();
            if($post_info)
            {
                return view('details', ['details' => $post_info]);
            }
            return view('404');
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
