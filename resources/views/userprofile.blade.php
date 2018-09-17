<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$userinfo->name}}@ {{$userinfo->username}}</title>
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}"/>
    <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('public/'.$userinfo->image)}}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <h5 class="card-title">{{$userinfo->name}}<?php echo " @"; ?>{{$userinfo->username}}</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  @if (Auth::check())
                    @if (Auth::user()->id === $userinfo->id)
                        <p>{{Auth::user()->id}}</p>
                        <p>{{Auth::user()->name}}</p>
                        <p>{{Auth::user()->username}}</p>
                        <p>{{Auth::user()->email}}</p>
                        <p>{{Auth::user()->active}}</p>
                        <p>{{Auth::user()->type}}</p>
                        <p>{{Auth::user()->created_at}}</p>
                        <p>{{Auth::user()->phone}}</p>
                      @else
                        <p>{{$userinfo->name}}</p>
                        <p>{{$userinfo->phone}}</p>
                        <p>{{$userinfo->username}}</p>
                        <p>{{$userinfo->email}}</p>
                    @endif
                  @endif
                </div>
                <div class="col-5">
                  <img style="width: 14rem;" class="card-img-top" src="{{asset('public/'.$userinfo->image)}}">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>