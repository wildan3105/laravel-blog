@extends ('layouts.master')

@section ('content')

	<div class="col-sm-8">
		<h1>Login</h1>

		<form method="POST" action="/login">
			{{csrf_field()}}

			<div class="form-group">
		    	<label for="name">Email:</label>
		    	<input type="email" class="form-control" id="email" name="email" required>
		  	</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" name="password" id="password" required>
			</div>

			<button type="submit" class="btn btn-primary" style="cursor: pointer;">Login</button>

			<br><br>

			@include ('layouts.errors')
		</form>
	</div>

@endsection