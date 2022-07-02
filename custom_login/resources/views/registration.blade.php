@extends('dashboard')
@section('content')

<main class="signup-form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<h3 class="card-header text-center">Register User</h3>
					<div class="card-body">
						<form action="{{ route('register-custom') }}" method="POST">
							@csrf
							{{-- First Method for Dispaly error message--}}
							{{-- @if($errors->any())
								<div class="alert alert-danger">
									<ol>
										@foreach($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach	
									</ol>
								</div>
							@endif --}}

							{{-- Second Method for Dispaly error message (Best Method)--}}
							{{-- <div class="form-group mb-3">
								<input type="text" class="form-control" placeholder="Enter Name" name="name" autofocus="">
								@if($errors->has('name'))
									<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif	
							</div> --}}

							{{-- Third Method for Dispaly error message $message call in all input type--}}
							{{-- <div class="form-group mb-3">
								<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" autofocus="">
								@error('name')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div> --}}


							<div class="form-group mb-3">
								<input type="text" class="form-control" placeholder="Enter Name" name="name" autofocus="">
								@if($errors->has('name'))
									<span class="text-danger">{{ $errors->first('name') }}</span>
								@endif	
							</div>

							<div class="form-group mb-3">
								<input type="text" class="form-control" placeholder="Enter Email" name="email">
								@if($errors->has('email'))
									<span class="text-danger">{{ $errors->first('email') }}</span>
								@endif	
							</div>

							<div class="form-group mb-3">
								<input type="password" class="form-control" placeholder="Enter Password" name="password">
								@if($errors->has('password'))	
									<span class="text-danger">{{ $errors->first('password') }}</span>
								@endif	
							</div>

							<div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">SignUp</button>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</main>

@endsection
