<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lock From {{Auth::user()->name}}</title>
        <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}"/>
        <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{asset('public/'.Auth::user()->image)}}">
    </head>
    <body>
        <div class="account-pages mt-5 mb-5">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <a href="{{ route('admin.loginDashboard') }}">
                                        <span><img src="{{ asset('public/assets/images/logo.png')}}" alt="" height="22"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your password to Access Account.</p>
                                </div>
                                <div class="text-center w-75 m-auto">
                                    <img src="{{ asset('public/'.Auth::user()->image) }}" height="88" alt="user-image" class="rounded-circle shadow-sm">
                                    <h4 class="text-dark-50 text-center mt-2 font-weight-bold">{{Auth::user()->name}}</h4>
                                    <p>
                                        @if($errors->has('fa'))
                                        <span class="text-danger tex-center" role="alert">
                                            <b>{{ $errors->first('fa') }}</b>
                                        </span>
                                    @endif</p>
                                </div>
                                <form action="{{ route('unlock.screenuser') }}" method="POST" class="mt-3">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"  name="password" id="password" placeholder="Enter your password">
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                    </div>
                                </form>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end row -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </body>
        </html>