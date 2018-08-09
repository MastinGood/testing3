@include('inc.header')
<div class="container">
	<div class="row">
		<div class="col-md-6">

			<form class="form-horizontal" method="POST" action="{{ url('/insert') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
                 
				<h2>CREATE</h2>
                 @if(count($errors)>0)
                   @foreach($errors->all() as $error )
                    <div class="alert alert-danger">
                 	{{$error}}
                    </div>
                   @endforeach
                 @endif
				<fieldset>
				<label>Title</label>
				<input type="text" name="title" class="form-control">
				<label>Description:</label>
				<textarea class="form-control" name="description"></textarea> 
				<br></br>
				<input type="submit" name="submittted" class="btn btn-primary">
				<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
				</fieldset>
             </div>
			</form>
		</div>
	</div>
</div>
@include('inc.footer')