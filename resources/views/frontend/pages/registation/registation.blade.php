@extends('frontend.layout.template')

@section('body-content')
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="{{route('login')}}">Log In!</a></span>
				</div>

				<!-- Account Type -->
				
					
				<!-- Form -->
				<form id="register-account-form"method="POST" action="{{route('register.store')}}">
					 @csrf
					<!-- Account Type -->
					<div class="account-type">
						@foreach($userTypes as $userType)
							@if($userType->name =='Freelancer')
								<div>
									<input type="radio" name="account_type" id="freelancer-radio" class="account-type-radio" checked="" value="{{$userType->id}}">
									<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> {{$userType->name}}</label>
								</div>
						@endif
						@endforeach
						@foreach($userTypes as $userType)
							@if($userType->name =='Employer')
						 <div>
							<input type="radio" name="account_type" id="employer-radio" class="account-type-radio" value="{{$userType->id}}">
							<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> {{$userType->name}}</label>
						</div>
						@endif
						@endforeach
					</div>
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" type="email" name="email" required placeholder="Email Address">
					</div>

					<div class="input-with-icon-left" data-tippy-placement="bottom" data-tippy="" data-original-title="Should be at least 8 characters long">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" type="password" name="password" required autocomplete="new-password" placeholder="Password" >
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password" >
					</div>
					<input type="submit" name=""class="button full-width button-sliding-icon ripple-effect margin-top-10 icon-material-outline-arrow-right-alt" style="width: 960px;" value="register">
					<!-- Button -->
					<!-- <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form" style="width: 960px;">Register <i class="icon-material-outline-arrow-right-alt"></i></button> -->
				</form>
				
				
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection