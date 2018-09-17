<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Session\Session;
use DB;
class PostController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function redirect()
    {
      return Redirect::to('/show-all-post');
    }
    public function activeStatus()
    {
        if (Auth::user()->active==0) 
        {
          return Redirect::to('/');
        }
    }
    public function addpost()
    {
        $this->activeStatus();
        return view('admin.addnewpost');
    }
    public function addnewpost(Request $request)
    {
        $items = $request->validate([
          'title' => 'required|min:4',
          'description'=>'required',
          'photo'=> 'required|max:2048'
        ]);
        $data = array();
        $data['title'] = $request->title;
        $data['language'] = $request->language;
        $data['status'] = $request->status;
        $data['description'] = $request->description;
        $data['authorid'] = Auth::user()->id;
        $image = $request->file('photo');
        if($data)
        {
            if ($image) 
            {
                $image_full_name ='Alauddin'.time().date('dmY').'.'.request()->photo->getClientOriginalExtension();
                $upload_path = 'assets/images/postimage/';
                $image_url = $upload_path.$image_full_name;
                $success = request()->photo->move(public_path($upload_path),$image_full_name);
                if($success)
                {
                    date_default_timezone_set("Asia/Dhaka");
                    $data['created_at']=date('Y-m-d H:i:s');
                    $data['photo'] = $image_url;
                    DB::table('post_tbl')->insert($data);
                    return Redirect::to('/add-new-post');
                }
            }
        }
    }
    public function showallpost() // All Data Show 
    {
         $this->activeStatus();
        $total = DB::table('post_tbl')->count();
        $post_info = DB::table('post_tbl')
                    ->join('users', 'post_tbl.authorid', '=', 'users.id')
                    ->select('users.*', 'post_tbl.*')
                    ->get();
        if($post_info)
        {
            return view('admin.showallpost', ['allinfopost' => $post_info,'total'=>$total]);
        }
    }
    public function unpublishpost($id)
    {
        $data = array();
        date_default_timezone_set("Asia/Dhaka");
        $data['updated_at']=date('Y-m-d H:i:s');
        $data['status'] = 0;
        DB::table('post_tbl')
        ->where('pid',$id)
        ->update($data);
         return Redirect::to('/show-all-post');
    }
    public function publishpost($id)
    {
        $data = array();
        date_default_timezone_set("Asia/Dhaka");
        $data['updated_at']=date('Y-m-d H:i:s');
        $data['status'] = 1;
        DB::table('post_tbl')
        ->where('pid',$id)
        ->update($data);
         return Redirect::to('/show-all-post');
    }
    public function edit($id)
    {
        $post_view = DB::table('post_tbl')
                    ->where('pid',$id)
                    ->first();
         if($post_view)
          {
            $data_view = view('admin.editpost')
                    ->with('newinfo',$post_view);
            return view('admin.master')
                    ->with('admin.editpost',$data_view);
          }
          else
          {
            return Redirect::to('/show-all-post');
          }
    }
    public function update(Request $request, $id)
    {
        //
        date_default_timezone_set("Asia/Dhaka");
         $items = $request->validate([
          'title' => 'required|min:4',
          'description'=>'required'
        ]);
        $data = array();
        $data['title'] = $request->title;
        $data['language'] = $request->language;
        $data['status'] = $request->status;
        $data['description'] = $request->description;
        $data['authorid'] = Auth::user()->id;
        $image = $request->file('photo');
        if($data)
        {
            if ($image) 
            {
                $deleteimage = \DB::table('post_tbl')->where('pid',$id)->first();
                $file= $deleteimage->{'photo'};
                $filename = public_path().'/'.$file;
                print_r($filename);
                 \File::delete($filename);
                 
                $image_full_name ='Alauddin'.time('H:i:s').date('dmY').'.'.request()->photo->getClientOriginalExtension();
                $upload_path = 'assets/images/postimage/';
                $image_url = $upload_path.$image_full_name;
                $success = request()->photo->move(public_path($upload_path),$image_full_name);
                if($success)
                {
                    $data['updated_at']=date('Y-m-d H:i:s');
                    $data['photo'] = $image_url;
                    DB::table('post_tbl')
                            ->where('pid',$id)
                            ->update($data);
                    return Redirect::to('/show-all-post');
                }
            }
            $data['updated_at']=date('Y-m-d H:i:s');
                    DB::table('post_tbl')
                            ->where('pid',$id)
                            ->update($data);
                    return Redirect::to('/show-all-post');
        }
    }
    public function destroy($id)
    {
        $image = \DB::table('post_tbl')->where('pid',$id)->first();
        if($image)
        {
            $file= $image->{'photo'};
            $filename = public_path().'/'.$file;
            print_r($filename);
             \File::delete($filename);
             
             DB::table('post_tbl')
                ->where('pid',$id)
                ->delete();
             return Redirect::to('/show-all-post');
        }
        return Redirect::to('/show-all-post');
    }    
}
