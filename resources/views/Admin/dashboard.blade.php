@extends('admin.master')
@section('title') Admin-Dashboard @endsection
@section('content')
<!-- start page title -->
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="#">{{Auth::user()->name}}</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-xl-3 col-lg-6">
        <div class="card widget-flat">
            <div class="card-body p-0">
                <div class="p-3 pb-0">
                    <div class="float-right">
                        <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Total User</h5>
                    <h3 class="mt-2">{{$totaluser}}</h3>
                </div>
                <div id="sparkline1"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-3 col-lg-6">
        <div class="card widget-flat">
            <div class="card-body p-0">
                <div class="p-3 pb-0">
                    <div class="float-right">
                        <i class="mdi mdi-currency-usd text-danger widget-icon"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Total Post</h5>
                    <h3 class="mt-2">{{$totalpost}}</h3>
                </div>
                <div id="sparkline2"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-3 col-lg-6">
        <div class="card widget-flat">
            <div class="card-body p-0">
                <div class="p-3 pb-0">
                    <div class="float-right">
                        <i class="mdi mdi-account-multiple text-primary widget-icon"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Total Users</h5>
                    <h3 class="mt-2">{{$totaluser}}</h3>
                </div>
                <div id="sparkline3"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-3 col-lg-6">
        <div class="card widget-flat">
            <div class="card-body p-0">
                <div class="p-3 pb-0">
                    <div class="float-right">
                        <i class="mdi mdi-eye-outline text-danger widget-icon"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Total Visits</h5>
                    <h3 class="mt-2">74,315</h3>
                </div>
                <div id="sparkline4"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">All User Informations</h4>
                <div class="table-responsive mt-3">
                    <table class="table table-hover table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Serial ID</th>
                                <th>Basic Info</th>
                                <th>Phone</th>
                                <th>Active</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $i=1; @endphp
                    @foreach($users as $user)
                        <tbody>
                            <tr>
                                <td><b>{{$i++}}</b></td>
                                <td>
                                    <img src="{{asset('public/'.$user->image)}}" alt="contact-img" height="36" title="contact-img" class="rounded-circle float-left mr-2" />
                                    <p class="mb-0 font-weight-bold">
                                    <a href="{{ route('userprofile',['name' => $user->username]) }}">{{$user->name}}</a></p>
                                    <span class="font-13">{{$user->email}}</span>
                                </td>
                                <td>
                                    {{$user->phone}}
                                </td>
                                <td>
                                    @if($user->active==1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Suspend</span>
                                    @endif
                                </td>
                                <td>
                                    {{$user->created_at}}
                                </td>
                                <td>
                                <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            @if(Auth::user()->type !=0 && $user->type !=2)
                                            <a href="{{ route('edit.user',['id' => $user->id])}}" class="dropdown-item notify-item">
                                                    <i class="mdi mdi-pencil mr-1 text-muted"></i>
                                                    <span>{{ __('Edit') }}</span>
                                                </a>
                                             <a href="{{ route('delete.user',['id' => $user->id])}}" class="dropdown-item notify-item">
                                                    <i class="mdi mdi-delete mr-1 text-muted"></i>
                                                    <span>{{ __('Remove') }}</span>
                                                </a>
                                                @elseif(Auth::user()->type==2)
                                                <a href="{{ route('edit.user',['id' => $user->id])}}" class="dropdown-item notify-item">
                                                    <i class="mdi mdi-pencil mr-1 text-muted"></i>
                                                    <span>{{ __('Edit') }}</span>
                                                </a>
                                             <a href="{{ route('delete.user',['id' => $user->id])}}" class="dropdown-item notify-item deleteuser">
                                                    <i class="mdi mdi-delete mr-1 text-muted"></i>
                                                    <span>{{ __('Remove') }}</span>
                                                </a>
                                            @endif
                                                <a class="dropdown-item deleteuser" href="#" id="sa-warning">
                                                <i class="mdi mdi-email mr-1 text-muted"></i>Send Email</a>
                                                @if(Auth::user()->type  !=0)
                                                @if($user->active ==1 && $user->type !=2)
                                                <a href="{{ route('banuser.login',['id' => $user->id])}}" class="dropdown-item notify-item" >
                                                    <i class="fe-eye-off mr-1 text-muted"></i>
                                                    <span>{{ __('Ban User') }}</span>
                                                </a>
                                                @elseif($user->type !=2)
                                                <a href="{{ route('activeuser.login',['id' => $user->id])}}" class="dropdown-item notify-item">
                                                    <i class="fe-eye mr-1 text-muted"></i>
                                                    <span>{{ __('Active User') }}</span>
                                                </a>
                                                @endif
                                                @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
