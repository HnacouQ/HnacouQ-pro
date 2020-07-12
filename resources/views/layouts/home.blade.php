<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	
	<link rel="stylesheet" href="{{url('public/home')}}/flug-in/bs3/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('public/home')}}/flug-in/font-awesome/css/all.css">
	<link rel="stylesheet" href="{{url('public/home')}}/css/style.css">
</head>
<body>
	<div class="page">
		<header>
			<div class="container">
				<div class="row">
					<div class="top">
						<div class="col-md-3 col-xs-3 header-logo">
							<img src="{{url('public/home')}}/images/logo.png" alt="">
						</div>
						<div class="col-md-6 col-xs-6">
							<div class="navbar my-nav">
								<ul class="nav navbar-nav">
									<li class="">
										<a href="#">HOME</a>
									</li>
									<li>
										<a href="#">SHOP</a>
									</li>
									<li>
										<a href="#">PAGE</a>
									</li>
									<li>
										<a href="#">BLOG</a>
									</li>
									<li>
										<a href="#">CONTACT</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="navbar my-nav">
								<ul class="nav navbar-nav">
									<li class="">
										<a href=""><img src="{{url('public/home')}}/images/icons/user.png" alt=""></a>
									</li>
									<li>
										<a data-toggle="modal" href="#modal-id"><img src="{{url('public/home')}}/images/icons/search.jpg" alt=""></a>
										<div class="modal fade" id="modal-id">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title">Modal title</h4>
													</div>
													<div class="modal-body">
														
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
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
										<a href=""><img src="{{url('public/home')}}/images/icons/cart_icon.png" alt="">
										<span class="icon-number">2</span>
										</a>
										<div class="effect-cart">
											
										</div>
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
							<img src="{{url('public/home')}}/images/logo.png" alt="">
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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tempore, ipsa nemo rerum nihil consequatur, expedita dolorem ab cum dolores rem voluptatem ullam! Voluptatibus quaerat expedita, aliquam cupiditate! Cupiditate, nesciunt.</p>
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
</body>
</html>
