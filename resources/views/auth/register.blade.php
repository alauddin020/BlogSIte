
@extends('admin.master')
@section('title') Add New User @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(Auth::user()->type !=0)
            <div class="card">
                <div class="card-header">{{ __('Add New User') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Add New User') }}"> @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="active" value="1">
                                <input type="hidden" name="image" value="assets/images/users/default.png">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label">{{ __('User Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label">{{ __('Admin Type') }}</label>

                            <div class="col-md-6">
                                <select name="type" class="wide" data-plugin="customselect" style="display: none;">
                                    <option value="0">Moderator</option>
                                    <option value="1">Admin</option>
                                    @if (Auth::user()->type==2)
                                        <option value="2">Super Admin</option>
                                    @endif
                                </select>
                            <div class="nice-select wide" tabindex="0">
                                <span class="current">Moderator</span>
                                <ul class="list">
                                    <li data-value="0" class="option selected">Moderator</li>
                                    <li data-value="1" class="option">Admin</li>
                                    @if (Auth::user()->type==2)
                                    <li data-value="2" class="option">Super Admin</li>
                                    @endif
                                </ul>
                            </div>
                            </div>
                            <small class="col-md-2 col-form-label text-danger">{{ __('Moderator') }}</small>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            @if($errors->has('newuser'))
                            <span class="text-success tex-center" role="alert">
                                <strong>{{ $errors->first('newuser') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
                @else
                <div class="col-xl-8 col-lg-6">
                    <div class="card widget-flat">
                        <div class="card-body p-0">
                            <div class="p-3 pb-0">
                                <div class="float-right">
                                    <i class="fe-lock text-primary widget-icon"></i>
                                </div>
                                <h5 class="text-muted font-weight-normal mt-0"></h5>
                                <h3 class="mt-2">You cannot access this page!</h3>
                            </div>
                            <div id="sparkline1"></div>
                        </div>
                    </div>
                </div>
                @endif
        </div>
    </div>
</div>
@endsection

