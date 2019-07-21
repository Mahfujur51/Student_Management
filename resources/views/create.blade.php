@extends('master')
@section('title')
Create Student | Student management
@endsection
@section('content')

<h2>Create Student Database</h2>

<form method="post" action="{{route('store')}}" data-parsley-validate>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</ul>
	</div>
	@endif

	{{csrf_field()}}
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>

	</div>
	<div class="form-group">
		<label for="registration_id">Registration Number</label>
		<input type="text" class="form-control" name="registration_id" id="registration_id" aria-describedby="emailHelp" placeholder="Enter Registration Number" required>

	</div>
	<div class="form-group">
		<label for="department_name">Department Name</label>
		<input type="text" class="form-control" name="department_name" id="department_name" aria-describedby="emailHelp" placeholder="Enter Department Name name" required>

	</div>
	<div class="form-group">
		<label for="info">Information</label>
		<textarea  type="text" class="form-control" name="info" id="info" aria-describedby="emailHelp" placeholder="Enter Information"></textarea>

	</div>
	
	

	<button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection