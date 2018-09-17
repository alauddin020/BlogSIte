@extends('admin.master')
@section('title') Page Not Found @endsection
@section('content')
<div class="card">
    <div class="text-center mt-4">
        <h4 class="text-uppercase text-danger mt-3">This page isn't available</h4>
        <p class="text-muted mt-3">It's looking like you may have taken a wrong turn. This page isn't availableThe link you followed may be broken, or the page may have been removed.</p>
			
        <a class="btn btn-info  mt-3" href="{{route('admin.loginDashboard')}}"><i class="mdi mdi-reply"></i> Return Home</a>
    </div>

</div>
@endsection
