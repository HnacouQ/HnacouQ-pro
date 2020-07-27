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
		
		<!-- begin-main-shop-page -->
		
		<div class="main-content-shop-page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 clearfix">
						<ul>
							<li class="color-gray">
								view
							</li>
							<li>
								<a href="{{route('shop_page')}}"><img src="{{url('public/home')}}/images/icons/icon-clearfix.png" alt=""></a>
							</li>
							<li>
								<a href=""><img src="{{url('public/home')}}/images/icons/icon-clearfix1.png" alt=""></a>
							</li>
						</ul>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-4 ">
								<div class="left-side-bar-top">
									<form action="" method="POST" class="form-inline" role="form">
										<h3>SEARCH</h3>
										<div class="form-group">
											<label class="sr-only" for="">label</label>
											<input type="email" class="form-control" id="" placeholder="Search Your KeyWord....">
										</div>
										<button type="submit" class="btn btn-primary btn-search ">Search</button>
									</form>
								</div>
								<div class="left-side-bar">
									<h3>Category</h3>
									<ul class="list-group">
										@foreach($category as $cats)
										<a href="{{route('view',['slug'=> $cats->slug])}}" class="color-black" style="text-decoration: none;"><li class="list-group-item">
												<span class="badge">{{$cats->products->count()}}</span>
												{{$cats->name}}
											</li></a>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="col-md-8">
								<div class="pro-item">
									@foreach($data->products as $pro)
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="thumbnail my-pro">
											
												<div class="pro-img">
													<img src="{{url('public/uploads/product')}}/{{$pro->image}}" alt="">
												</div>
											
											<div class="caption text-center" style="padding: 40px 15px; height: 160px">
												<h4>{{$pro->name}}</h4>
												<img src="images/icons/icon-star.png" alt="">
												@if($pro->sale_price == 0)
                                                <p style="margin-top: 15px;">
                                                    Price: {{number_format($pro->price)}} đ
                                                </p>                                           
                                            @else
                                            <p  style="margin-top: 15px;">
                                                <s class="pull-left">Price:{{number_format($pro->price)}} đ</s>
                                                <span class="pull-right">Sale-Price: {{number_format($pro->sale_price)}} đ</span>
                                            </p> 

                                            
                                            @endif							
											</div>
											<div class="pro-effect">
												<div class="pro-effect-item">
													<ul>
														<li>
															<a href="{{route('view',['slug' => $pro->slug])}}"><i class="fas fa-search"></i></a>
														</li>
														<li>
															<a href="{{route('cart.add',['id'=>$pro->id])}}"><i class="fas fa-shopping-cart"></i></a>
														</li>
														<li>
															<a href=""><i class="far fa-heart"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 text-center pagination-shop">
						<ul class="pagination">
							<li><a href="#" class="">&laquo; Previos</a></li>
							<li class=""><a href="#" >1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next &raquo; </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
					
		<!-- end-main-shop-page -->
		
@stop()
