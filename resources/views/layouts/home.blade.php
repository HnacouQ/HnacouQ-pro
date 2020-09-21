<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HnaCouQ | Home</title>
	<link rel="icon" href="{{asset('public/home/images/graduation cap.png')}}">
	<link rel="stylesheet" href="{{url('public/home')}}/flug-in/bs3/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('public/home')}}/flug-in/font-awesome/css/all.css">
	<link rel="stylesheet" href="{{url('public/home')}}/flug-in/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('public/home')}}/flug-in/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<link rel="stylesheet" href="{{url('public/home')}}/css/style.css">
</head>
<body>
	<div class="page preloading">
		<div id="preload" class="preload-container text-center">
	        <span class="glyphicon glyphicon-refresh preload-icon rotating"></span>
	    </div>
		<header>
			<div class="container">
				<div class="row">
					<div class="top">
						<div class="col-md-3 col-xs-3 header-logo">
							<a href="{{route('home')}}"><img src="{{url('public/home')}}/images/logohna.png" alt=""></a>
						</div>
						<div class="col-md-5 col-xs-5">
							<div class="navbar my-nav">
								<ul class="nav navbar-nav">
									<li class="">
										<a href="{{route('home')}}">HOME</a>
									</li>
									<li>
										<a href="{{route('shop_page')}}">SHOP</a>
									</li>
									<li>
										<a href="#">PAGE</a>
									</li>
									<li>
										<a href="#">BLOG</a>
									</li>
									<li>
										<a href="{{route('home_contact')}}">CONTACT</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="navbar my-nav">
								<ul class="nav navbar-nav">
									<li class="" >
										@if(isset(Auth::guard('cus')->user()->email))
										<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: capitalize">{{Auth::guard('cus')->user()->name}}<b class="caret"></b></a>
										<ul class="dropdown-menu" >
											
											<li><a href="" style="text-transform: capitalize">Profile</a></li>
											<li><a href="{{route('my_order',Crypt::encrypt(Auth::guard('cus')->user()->id))}}" style="text-transform: capitalize">My order</a></li>

											<li><a href="{{route('home_logout')}}" style="text-transform: capitalize">Log out</a></li>
										</ul>
										</li>
										@else
										<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{url('public/home')}}/images/icons/user.png" alt=""><b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="{{route('home_login')}}" style="text-transform: capitalize">Login</a></li>
											
											<li><a href="{{route('register')}}" style="text-transform: capitalize">Register</a></li>

										</ul>
										</li>
										
										@endif
									</li>
									<li>
										<a data-toggle="modal" href="#modal-id"><img src="{{url('public/home')}}/images/icons/search.jpg" alt=""></a>
										<div class="modal fade" id="modal-id">
											<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title">Search Product</h4>
														</div>
														<div class="modal-body">
															<form action="{{route('home_search')}}" method="GET" class=" text-center" role="form" >
															
																<div class="form-group ">
																	<input type="text" name="search" class="form-control" id="" placeholder="Key.....">
																	<span class=""></span>
																</div>
																<button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
															</form>
														</div>								
													</div>
												</div>
										</div>
									</li>
									
									<li>
										<a href=""><img src="{{url('public/home')}}/images/icons/heart_icon.png" alt="">
											<span class="icon-number">2</span>
										</a>
									</li>
									<li class="head-cart">
										<a href="{{route('cart')}}"><img src="{{url('public/home')}}/images/icons/cart_icon.png" alt="">
										<span class="icon-number" id="list_cart">{{$carts->total_quantity}}</span>
										</a>
										
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		@yield('content')

		<!-- begin-footer -->
		<div class="footer">
			<div class="container">
				<div class="row my-footer">
					<div class="col-md-3">
						<h3>
							<img src="{{url('public/home')}}/images/logohna.png" alt="">
						</h3>
						<div class="adress">
							<p>No.342 Oxford Stress,</p>
							<p>012 United State</p>
							<p>quocanh2298@gmail.com</p>
							<p>0399419888</p>
							<p>Help & Support</p>
						</div>
						<div class="social">
							<ul>
								<li><a href=""><img src="{{url('public/home')}}/images/icons/icon-ft-1.png" alt=""></a></li>
								<li><a href=""><img src="{{url('public/home')}}/images/icons/icon-ft-2.png" alt=""></a></li>
								<li><a href=""><img src="{{url('public/home')}}/images/icons/icon-ft-3.png" alt=""></a></li>
								<li><a href=""><img src="{{url('public/home')}}/images/icons/icon-ft-4.png" alt=""></a></li>
								<li><a href=""><img src="{{url('public/home')}}/images/icons/icon-ft-5.png" alt=""></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<h3>Useful Links</h3>
						<p>About us</p>
						<p>Privacy Popcy</p>
						<p>Terms or Conditions</p>
						<p>Contact Us</p>
						<p>Help & Support</p>
					</div>
					<div class="col-md-2">
						<h3>My Account</h3>
						<p>My Account</p>
						<p>My Cart</p>
						<p>My Wishpst</p>
						<p>Regitstration</p>
						<p>Ckeck Out</p>
					</div>
					<div class="col-md-5">
						<h3>Subscribe  Out Newsletter</h3>
						<div class="new-letter">
							<p>We value and respect your privacy. Please read our Privacy Statement, which states our firm commitment to your privacy. Your email address will not be sold or used for purposes other than subscription for the newsletter.</p>
							<form action="" method="POST" class="form-inline" role="form">
								<div class="form-group">
									<input type="email" class="form-control footer-input" id="" placeholder="Your email Adress">
								</div>
								<button type="submit" class="btn btn-danger footer-btn">Subcribe</button>
							</form>
						</div>
					</div>
				</div>
				<div class="end-footer">
					<div class="container">
						<div class="row end-footer-main">
							<div class="end-footer-left">
								<p>@ 2019 Code Astrology.All Right Reserved</p>
							</div>
							<div class="end-footer-right pull-right">
								<ul>
									<li><img src="{{url('public/home')}}/images/icons/icon-ft1.png" alt=""></li>
									<li><img src="{{url('public/home')}}/images/icons/icon-ft2.png" alt=""></li>
									<li><img src="{{url('public/home')}}/images/icons/icon-ft3.png" alt=""></li>
									<li><img src="{{url('public/home')}}/images/icons/icon-ft4.png" alt=""></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/bs3/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/bs3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/bs3/js/myJs.js"></script>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/bs3/js/toastr.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
	<script type="text/javascript" src="{{url('public/home')}}/flug-in/bs3/js/toastr.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	
	<script type="text/javascript">


		$(window).load(function() {
		    $('body').removeClass('preloading');
		    $('#preload').delay(500).fadeOut('fast');
		});

		$('.owl-carousel').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }

		});

		toastr.options = 
      	{
          newestOnTop      : true,
          closeButton      : false,
          progressBar      : true,
          preventDuplicates: false,
          showMethod       : 'slideDown',
          timeOut          : 3000, //default timeout,
      	};
		
	</script>
</body>
</html>
