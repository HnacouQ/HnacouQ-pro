@extends('layouts.home')

@section('content')
		<div class="banner">
			<div class="container">
				<div class="banner-content">
					<img src="{{url('public/home')}}/images/banners/banner2.png" alt="">
					<div class="banner-content-detail text-center">
						<h1>CONTACT</h1>
						<i class="fas fa-home"></i><span> Home </span><i class="fas fa-angle-double-right"></i><span style="color: red;"> CONTACT</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end-banner -->
		<div class="main-content-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 map">
						<div class="row">
							<img src="{{url('public/home')}}/images/Map.png" alt="">
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 contact">
						<div class="row">
							@if(Session::has('success'))
							<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('success')}}
							</div>
							@endif
							<div class="col-md-4 if-contact">
								<h3>Feel Free Don't Hesitate To Contact With Us</h3>
								<p class="color-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quod omnis error eos. Dolorem vero excepturi hic, officia aperiam, obcaecati eius veritatis sit itaque nemo id praesentium. Tenetur, laborum, voluptatem!</p>
								<div class="media">
									<a class="pull-left" href="#">
										<i class="fas fa-phone-alt color-red"></i>
									</a>
									<div class="media-body">
										<h4 class="media-heading">+8439 941 9888</h4>
										<h4 class="media-heading">+8439 941 9888</h4>
									</div>
								</div>
								<div class="media">
									<a class="pull-left" href="#">
										<i class="fas fa-map-marker-alt color-red"></i>
									</a>
									<div class="media-body">
										<h4 class="media-heading">Đường 3-Ngõ 2 </h4>
										<h4 class="media-heading">Phù Lỗ - Sóc Sơn - Hà Nội</h4>
									</div>
								</div>
								<div class="media">
									<a class="pull-left" href="#">
										<i class="fas fa-envelope-open-text color-red"></i>
									</a>
									<div class="media-body">
										<h4 class="media-heading">Quocanh2298@gmail.com</h4>
										<h4 class="media-heading">HnacouQ@gmail.com</h4>
									</div>
								</div>
							</div>
							<div class="col-md-8 form-contact">
								<form method="POST"  action="{{route('post_contact')}}">
									@csrf
									<div class="form-row">
									    <div class="col-md-12">
									    	<h2>Contact</h2>
									    </div>
									</div>
								 	<div class="form-row">
									    <div class="form-group col-md-6">
									      	<input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Your Name">
									    </div>
									    <div class="form-group col-md-6">
									      	<input type="email" class="form-control" name="email"  placeholder="Your Email Address">
									    </div>
									     <div class="form-group col-md-12">
									    	<input type="text" class="form-control" id="inputEmail4" name="subject" placeholder="Subject">
									    </div>
									     <div class="form-group col-md-12">
									    	<textarea name="content" id="input" class="form-control" rows="6"  required="required" placeholder="Message Here"></textarea>
									    </div>
									    <div class="col-md-12">
									   	<input type="submit" class="btn btn-success btn-contact" value="Send Message">
									   </div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
	
@stop()
