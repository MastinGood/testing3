<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css')}}">
	<script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
</head>
<body>
@include('layout.sidenav')
@include('layout.mainnav')
<section class="side">
		<div class="container">
			<div class="jumbotron">
				<h2>Welcome to Employee Management System</h2>
			</div>
		</div>
		<a href="{{url('/ems/add')}}" class="btn btn-success btn btn-lg pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add Employee</a>
	</section>
</body>
</html>