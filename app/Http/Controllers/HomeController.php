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
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Session\Session;
use DB;
class HomeController extends Controller
{

  use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // user Active Or Not
     public function activeStatus()
    {
        if (Auth::user()->active==0) 
        {
          return Redirect::to('/');
        }
    }
    // Show all user
    public function index() /****************/
    {
        $this->activeStatus();
        $totalpost = DB::table('post_tbl')->count();
        $totaluser = DB::table('users')->count();
        $users = DB::table('users')->get();
        return view('admin.dashboard', ['users' => $users,'totaluser'=>$totaluser,'totalpost'=>$totalpost]);
    }
    // Add new user method
    public function addnewuser(Request $request)
    {
        $userdata = $request->validate([
            'name'     => 'required|string|max:255|regex:/(^([A-Za-z]+)?$)/u',
            'username' => 'required|string|min:4|max:20|unique:users|regex:/(^([a-z0-9]+)?$)/u',
            'phone' => 'required|string|min:4|max:20|unique:users|regex:/(^([0-9]+)?$)/u',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $data = array();
        $data['name']     = $request->name;
        $data['username'] = $request->username;
        $data['phone'] = $request->phone;
        $data['type']     = $request->type;
        $data['active']    = $request->active;
        $data['image']    = $request->image;
        $data['email']    = $request->email;
        $data['password'] = Hash::make($request->password);
        if($data)
        {
            date_default_timezone_set("Asia/Dhaka");
            $data['created_at']=date('Y-m-d H:i:s');
            DB::table('users')->insert($data);
             return redirect(route('register'))->withErrors([
            'newuser' => [trans('auth.newuser')], ]);
        }
    }
    
    // Userprofile view
    public function profile($name)
    {
        $user_view = DB::table('users')
                    ->where('username',$name)
                    ->first();
          if($user_view)
          {
            return view('admin.userprofile',['userinfo'=>$user_view]);
          }
          else
          {
            return view('404') ;
          }
    }
    // 
    public function settings()
    {
      $user_view = DB::table('users')
                    ->where('id',Auth::user()->id)
                    ->first();
        if($user_view)
        {
          return view('admin.settings',['userinfo'=>$user_view]);
        }
    }
    public function settingsname()
    {
      return 'hi';
    }
    //Redirect all Routes
    public function redirect()
    {
      return Redirect::to('/admin-dashboard');
    }
    //edit user method
    public function editUser($id)
    {
      $user_view = DB::table('users')
                    ->where('id',$id)
                    ->first();
        if($user_view)
        {
          if(Auth::user()->type !=0)
          {
            if ($user_view->type !=2 &&  Auth::user()->type) 
            {
                return 'Request to edit this id'.$id;
            }
            elseif (Auth::user()->type ==2) 
            {
              return 'You Can edit Super Admin '.$id;
            }
          }
        }
        return $this->redirect();
    }
    // Delete user method
    public function deleteUser($id)
    {
        $user_view = DB::table('users')
                    ->where('id',$id)
                    ->first();
        if($user_view)
        {
          if(Auth::user()->type !=0)
          {
            if ($user_view->type !=2 &&  Auth::user()->type) 
            {
                return 'Request to edit this id'.$id;
            }
            elseif (Auth::user()->type ==2) 
            {
              return 'You Can edit Super Admin '.$id;
            }
          }
        }
        return $this->redirect();
    }
    //Ban login user method
    public function banUserLogin($id)
    {
        $user_view = DB::table('users')
                    ->where('id',$id)
                    ->first();
        if($user_view)
        {
          if(Auth::user()->type !=0)
          {
            if ($user_view->type !=2 &&  Auth::user()->type) 
            {
                return 'Request to edit this id'.$id;
            }
            elseif (Auth::user()->type ==2) 
            {
              return 'You Can edit Super Admin '.$id;
            }
          }
        }
        return $this->redirect();
    }
    //Ban active user method
    public function banUserActive($id)
    {
        $user_view = DB::table('users')
                    ->where('id',$id)
                    ->first();
        if($user_view)
        {
          if(Auth::user()->type !=0)
          {
            if ($user_view->type !=2 &&  Auth::user()->type) 
            {
                return 'Request to edit this id'.$id;
            }
            elseif (Auth::user()->type ==2) 
            {
              return 'You Can edit Super Admin '.$id;
            }
          }
        }
        return $this->redirect();
    }
}
