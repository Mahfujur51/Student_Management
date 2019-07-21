@extends('master')
@section('content')
 <h2>Update Student Data</h2>
<form method="post" action="{{route('update',$student->id)}}">
	{{csrf_field()}}
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$student->name}}">

	</div>
	<div class="form-group">
		<label for="registration_id">Registration Number</label>
		<input type="text" class="form-control" name="registration_id" id="registration_id" aria-describedby="emailHelp" value="{{$student->registration_id}}">

	</div>
	<div class="form-group">
		<label for="department_name">Department Name</label>
		<input type="text" class="form-control" name="department_name" id="department_name" aria-describedby="emailHelp" value="{{$student->department_name}}">

	</div>
	<div class="form-group">
		<label for="info">Information</label>
		<textarea  type="text" class="form-control" name="info" id="info" aria-describedby="emailHelp" placeholder="Enter Information">{{$student->info}}</textarea>

	</div>
	
	

	<button type="submit" class="btn btn-primary">Update</button>
</form>






@endsection