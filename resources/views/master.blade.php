<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title','Student Management')

	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  >
	<link rel="stylesheet" href="{{('css/parsly.css')}}"  >
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">SMS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample07">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('create')}}">Create</a>
					</li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">

					@if(Auth::check())
					<li class="nav-item">
						<a class="nav-link" href="{{route('home')}}">Dashboard</a>
					</li>
					@else
					<li class="nav-item">
						<a class="nav-link" href="{{route('register')}}">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('login')}}">Login</a>
					</li>

					@endif	
				</ul>
				
			</div>
		</div>
	</nav>
	<div class="container">
		
		@yield('content')

	</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="{{('js/parsley.js')}}"></script>
</html>