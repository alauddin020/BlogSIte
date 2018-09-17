<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Page Not FOund</title>
		<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}"/>
		<link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
		<style type="text/css">.show{border: 1px solid #ccc;margin-top: 10%;background: #fff;border-radius: 4px;}.show h4,p{margin-left: 32px;}
		</style>
	</head>
	<body style="background: #eee">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-7">
					<div class="card-body show">
						<h5><i class="mdi mdi-alert text-danger widget-flat" aria-hidden="true"></i> Sorry, this content isn't available right now</h5><hr/>
						<p>The link you followed may have expired, or the page may only be visible to an audience you're not in.</p>
						<a href="{{ url('/') }}">Go back to the previous page</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>