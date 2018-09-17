@extends('admin.master')
@section('title') {{$userinfo->name}}@endsection
@section('content')
	<div class="card mb-3">
  <div class="card-body">
  	<div class="row">
  		<div class="">
  			
  		</div>
  		<div class="">
  			<img style="width: 14rem;" class="card-img-top" src="{{asset('public/'.$userinfo->image)}}">
  		</div>
  	</div>
    <h5 class="card-title">{{$userinfo->name}}<?php echo " @"; ?>{{$userinfo->username}}</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
@endsection