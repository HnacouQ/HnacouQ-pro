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
					@if(Session::has('success'))
							<div class="alert alert-success text-center">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('success')}}
							</div>
							@endif
					@if(Session::has('noti'))
							<div class="alert alert-danger text-center">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('noti')}}
							</div>
							@endif		

					<div class="col-md-4 col-md-offset-4">
						<ul class="">
							<li ><a href="" class="color-black" style="text-decoration: none">REGISTER</a></li>
							<li style="color: red;">LOGIN</li>
						</ul>
						<form action="" method="POST" role="form">
							@csrf
							<div class="form-group">
								<label for="">Email Address</label>
								<input type="text" class="form-control" name="email" id="">
							</div>
							@if($errors->has('email'))
							{{$errors->first('email')}}
							@endif
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" name="password" id="">
							</div>
							@if($errors->has('password'))
							{{$errors->first('password')}}
							@endif
							<div class="form-group form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
							    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
							</div>
							<button type="submit" class="btn btn-primary btn-login" >Login</button>
							<a href="" style="color: red; text-decoration: none;">lose your password?</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		
@stop()
