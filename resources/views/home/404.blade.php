@extends('layouts.home')

@section('content')
		<div class="banner">
				<div class="banner-content">
					<img src="{{url('public/home')}}/images/banners/banner2.png" alt="">
					<div class="banner-content-detail text-center">
						<h1>CART PAGE</h1>
						<i class="fas fa-home"></i><span> Home </span><i class="fas fa-angle-double-right"></i><span style="color: red;"> Cart Page</span>
					</div>
				</div>
		</div>
		<!-- end-banner -->
		
		<!-- begin main-content-404page	 -->

		<div class="main-content-404page">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 left-404">
							<h2>OPPS!! Page Not Found</h2>
							<p>We're sorry but we can't seem to find the pages you request.
							This might be because you have typed the web address not find incorectly</p>
							<a href="{{route('home')}}" class="btn btn-danger btn-404">BACK TO HOME</a>
						</div>
						<div class="col-md-6 right-404">
							<img src="{{url('public/home')}}/images/404.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>	

		<!-- end main-content-404page	 -->
		
@stop()
