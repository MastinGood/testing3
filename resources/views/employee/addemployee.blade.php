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
		
		<h2 class="pull-left">Employee Management</h2>
		<div class="container">
		<div class="col-md-9">
		<div class="panel panel-default">
		    <div class="panel-heading">Add New Employee</div>
		    <div class="panel-body">
		    <form class="form-group">
		    	<label class="pull-left">First Name:</label> <input type="text" name="first" class="form-control">
		    	<label class="pull-left">Last Name:</label> <input type="text" name="last" class="form-control">
		    	<label class="pull-left">Middle Name:</label> <input type="text" name="last" class="form-control">
		    	<label class="pull-left">Address:</label> <input type="text" name="last" class="form-control">
		    	<label class="pull-left">City</label>
		    	<select class="form-control">
		    	<option>Cebu city</option>
		    	<option>Talisay City</option>
		    	<option>Mandaue City</option>	
		    	</select>
		    	<label class="pull-left">Age:</label> <input type="text" name="last" class="form-control">
		    	<label class="pull-left">Birthday:</label> <input type="date" name="last" class="form-control">
		    	<label class="pull-left">Hired Date:</label> <input type="date" name="last" class="form-control">
		    	<label class="pull-left">Department</label>
		    	<select class="form-control">
		    	<option>BSIT</option>
		    	<option>BSMT</option>
		    	<option>HRM</option>	
		    	</select>
		    	<br>
		    	<label class="pull-left">Picture(optional):</label><input type="file" name="pic">
		    	<br>
		    	<input type="submit" name="submit" class="btn btn-success btn btn-lg pull-left">
		    </form>
		    </div>
		    </div>
		  </div>
	    </div>
	</section>
</div>
</body>
</html>