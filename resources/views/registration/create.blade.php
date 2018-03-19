@extends ('layouts.master')

@section ('content')

	<div class="col-sm-8">
		<h1>Register</h1>

		<form method="POST" action="/register">
			{{csrf_field()}}

			<div class="form-group">
		    	<label for="name">Name:</label>
		    	<input type="text" class="form-control" id="name" name="name" required>
		  	</div>

			<div class="form-group">
		    	<label for="name">Email:</label>
		    	<input type="email" class="form-control" id="email" name="email" required>
		  	</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
			</div>

			<button type="submit" class="btn btn-primary" style="cursor: pointer;">Register</button>

			<br><br>

			@include ('layouts.errors')
		</form>
	</div>

@endsection