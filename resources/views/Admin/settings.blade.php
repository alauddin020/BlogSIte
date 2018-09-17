@extends('Admin.master')
@section('title') General Account Settings @endsection
@section('content')
<div class="container">
	<h4>General Account Settings</h4>
	<div class="row">
		<div class="col-8">
			<table class="table table-hover table-sm" >
				<tbody>
					<tr style="cursor: pointer;">
						<td>Name</td>
						<td>{{$userinfo->name}}</td>
						<td><a href="#">Edit</a></td>
					</tr>
					<tr style="cursor: pointer;">
						<td>username</td>
						<td>{{$userinfo->username}}</td>
						<td>Edit</td>
					</tr>
					<tr style="cursor: pointer;">
						<td>Phone</td>
						<td>{{$userinfo->phone}}</td>
						<td>Edit</td>
					</tr>
					<tr style="cursor: pointer;">
						<td>Email</td>
						<td>{{$userinfo->email}}</td>
						<td>Edit</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection