@extends('layout')


@section('content')
		<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h1>	Welcome please register!	</h1>
	
	<h1>All users</h1>

	 @foreach ($user1s as $user1)
		<div>
			{{ $user1->name }}
		</div>
	
	@endforeach
	

		<hr>
		<h3>Fill in required informations</h3>
	
		<form  method="POST" action=" "> 
				<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
 				
 				
			<ul class="list-group" >

			
				
				Name
				<div class="form-group" title="name" >
					<textarea name="name" class="form-control" >
					
					</textarea>
				</div>
				

				Email
				<div class="form-group"  title="email"> 
					<textarea name="email"  class="form-control" >
					
					</textarea>
				</div>
				Phone number	
				<div class="form-group"  title="phone_number"> 
					<textarea name="phone_number"  class="form-control" >
					
					</textarea>
				</div>

				
					<div class="form-group" >
					<button class="btn btn-primary">Register</button>
					</div>
				
			
			</ul>
		</form>
		@foreach($errors->all() as $error)

		{{ $error }}
		@endforeach
	</div>
</div>

@endsection