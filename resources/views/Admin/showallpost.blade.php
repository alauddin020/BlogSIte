@extends('admin.master')
@section('title') Show-All-Post @endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        {{-- <li class="breadcrumb-item"><a href="{{ route('userprofile',['name' => Auth::user()->username]) }}">{{Auth::user()->name}}</a></li> --}}
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">All Post</li>
                    </ol>
                </div>
                <h4 class="page-title">All Post</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @if($total>0)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="basic-datatable" class="table table-hover dt-responsive nowrap table-centered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Basic Info</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $i = 1; @endphp
                        @foreach($allinfopost as $newinfo)
                        <tbody>
                            <tr>
                                <td><b>{{$i++}}</b></td>
                                <td>
                                    {{-- <img src="{{asset('public/'.$newinfo->photo)}}" alt="contact-img" height="36" title="{{$newinfo->name}}" class="rounded-circle float-left mr-2" style="border-radius: 50%;height: 30px;width: 30px;" /> --}}
                                    <p class="mb-0 font-weight-bold"><a href="{{ route('userprofile',['name' => $newinfo->username]) }}">{{$newinfo->name}}</a></p>
                                    
                                </td>
                                <td>
                                    {{$newinfo->title}}
                                </td>
                                <td>
                                    @if($newinfo->language==0)
                                    {{ substr($newinfo->description, 0,30)}}...
                                    @else
                                    {{substr($newinfo->description, 0,70)}}...
                                    @endif
                                </td>
                                <td>
                                    {{$newinfo->created_at}}
                                </td>
                                <td>
                                    <div class="btn-group dropdown">
                                        <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="{{ route('edit.post',['pid' => $newinfo->pid])}}"
                                                class="dropdown-item notify-item" >
                                                <i class="mdi mdi-pencil mr-1 text-muted"></i>
                                                <span>{{ __('Edit') }}</span>
                                            </a>
                                            {{-- {{ route('delete.post',['pid' => $newinfo->pid])}} --}}
                                            <a href="{{ route('delete.post',['pid' => $newinfo->pid])}}" class="dropdown-item notify-item delpost" 
                                            id="delete">
                                                <i class="mdi mdi-delete mr-1 text-muted"></i>
                                                <span>{{ __('Remove') }}</span>
                                            </a>
                                            @if($newinfo->status==1)
                                            <a href="{{ route('unpublish.post',['pid' => $newinfo->pid])}}" class="dropdown-item notify-item">
                                                <i class="fe-eye-off mr-1 text-muted"></i>
                                                <span>{{ __('UnPublished') }}</span>
                                            </a>
                                            @else
                                            <a href="{{ route('publish.post',['pid' => $newinfo->pid])}}" class="dropdown-item notify-item" >
                                                <i class="fe-eye mr-1 text-muted"></i>
                                                <span>{{ __('Published') }}</span>
                                            </a>
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
    @else
    <div class="col-xl-8 col-lg-6">
        <div class="card widget-flat">
            <div class="card-body p-0">
                <div class="p-3 pb-0">
                    <div class="float-right">
                        <i class="fe-lock text-primary widget-icon"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0"></h5>
                    <h3 class="mt-2">No Post Found!</h3>
                </div>
                <div id="sparkline1"></div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('public/assets/js/index.js')}}"></script>
@endsection