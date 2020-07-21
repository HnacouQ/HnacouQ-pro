@extends('layouts.home')

@section('content')
		<div class="banner">
			<div class="container">
				<div class="banner-content">
					<img src="{{url('public/home')}}/images/banners/banner2.png" alt="">
					<div class="banner-content-detail text-center">
						<h1>CART PAGE</h1>
						<i class="fas fa-home"></i><span> Home </span><i class="fas fa-angle-double-right"></i><span style="color: red;"> Cart Page</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end-banner -->
		
		<div class="main-content-login-register">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<ul class="">
							<li style="color: red;" >REGISTER</li>
							<li >LOGIN</li>
						</ul>
						<form action="" method="POST" role="form">
							@csrf
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="name" class="form-control" id="">
							</div>
							@if($errors->has('name'))
							{{$errors->first('name')}}
							@endif
							<div class="form-group">
								<label for="">Phone</label>
								<input type="number" name="phone" class="form-control" id="">
							</div>
							@if($errors->has('phone'))
							{{$errors->first('phone')}}
							@endif
							<div class="form-group">
								<label for="">Address</label>
								<input type="text" name="address" class="form-control" id="">
							</div>
							@if($errors->has('address'))
							{{$errors->first('address')}}
							@endif
							<div class="form-group">
								<label for="">Email Address</label>
								<input type="email" name="email" class="form-control" id="">
							</div>
							@if($errors->has('email'))
							{{$errors->first('email')}}
							@endif
							<div class="form-group">
								<label for="">PassWord</label>
								<input type="password" name="password" class="form-control" id="">
							</div>
							@if($errors->has('password'))
							{{$errors->first('password')}}
							@endif
							<p>A passWord will be sent to your email</p>
							<p>your personal data will be used to support your experience
							throughout this website, to manage access to your acount, and for the purposes decribed in our privacy policy</p>
							<div class="form-group form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
							    <label class="form-check-label" for="exampleCheck1">Agree with term & conditions</label>
							</div>
							<button type="submit" class="btn btn-primary btn-login">Register</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>

		
@stop()
