@extends('layouts.home')

@section('content')
		<div class="banner">
			<div class="container">
				<div class="banner-content">
					<img src="{{url('public/home')}}/images/banners/banner2.png" alt="">
					<div class="banner-content-detail text-center">
						<h1>SHOP PAGE</h1>
						<i class="fas fa-home"></i><span> Home </span><i class="fas fa-angle-double-right"></i><span style="color: red;">SHOP PAGE</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end-banner -->
		
		<!-- begin main-content-product-tail -->
		<div class="main-product-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 ">
						<div class="col-md-6 product-detail-left" >
							<img src="{{url('public/uploads/product')}}/{{$prod->image}}" alt="" width="100%;">
						</div>
						<div class="col-md-6 product-detail-right">
							<div class="product-detail-item">
								<h3>{{$prod->name}}</h3>
							</div>
							<div class="product-detail-item">
								@if($prod->sale_price > 0)
									<h4><s>Price: {{number_format($prod->price)}} đ</s></h4>
									<h4>sale price: {{number_format($prod->sale_price)}} đ</h4>
								@else
									<h4>Price: {{number_format($prod->price)}} đ</h4>
								@endif
							</div>
							<div class="product-detail-item">
							<img src="{{url('public/home/images/icons/icon-star.png')}}" alt="">
							</div>
							<div class="product-detail-item">
								<h4>Review</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sapiente doloribus sunt, voluptate cumque dolore odio dolores tempora! Atque qui placeat temporibus odit itaque, quis perspiciatis? In aliquam recusandae soluta.</p>
							</div>
							<div class="product-detail-item">
								<form action="" method="POST" class="form-horizontal" role="form">
										<div class="form-group">
											<label for="" class="col-md-4">SKU :</label>	
											<a href="" class="col-md-8">81273123</a>
										</div>
										<div class="form-group">
											<label for="" class="col-md-4">Category :</label>	
											<a href="" class="col-md-8">{{$prod->cat->name}}</a>
										</div>
										<div class="form-group">
											<label for="" class="col-md-4">Tags :</label>	
											<li> <a href="#">Fashion</a> <a href="#">Woman</a> <a href="#">Sale</a></li>
										</div>
										<div class="form-group">
											<label for="" class="col-md-4">Share :</label>	
											<li> <a href="#"><img src="{{url('public/home')}}/images/icons/icon-ft-1.png" alt=""></a> <a href="#"><img src="{{url('public/home')}}/images/icons/icon-ft-2.png" alt=""></a><a href="#"><img src="{{url('public/home')}}/images/icons/icon-ft-3.png" alt=""></a><a href=""><img src="{{url('public/home')}}/images/icons/icon-ft-4.png" alt=""></a></li>
										</div>
								</form>
							</div>
							<div class="product-detail-item">
								<form action="{{route('cart.add',['id'=>$prod->id])}}" method="GET" class="form-inline" role="form">
									<div class="form-group">
										<input type="number" name="quantity" class="form-control text-center" id="" value="1">
									</div>
									<button type="submit" class="btn btn-danger">Add To Cart</button>
								</form>
							</div>
						</div>
						<div class="product-detail-tab col-md-12">
							<div role="tabpanel">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs my-tab" role="tablist">
									<li role="presentation" class="">
										<a href="#Decription" aria-controls="home" role="tab" data-toggle="tab">Decription</a>
									</li>
									<li role="presentation">
										<a href="#Addition" aria-controls="tab" role="tab" data-toggle="tab">Addition Information</a>
									</li>
									<li role="presentation" class="active">
										<a href="#Review" aria-controls="tab" role="tab" data-toggle="tab">Reviews</a>
									</li>

								</ul>
							
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane" id="Decription">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iure fuga nostrum, illum. Sint rem hic ipsam cumque quaerat repellat consequatur, temporibus facilis perspiciatis dignissimos commodi voluptate dolor, sapiente deleniti?</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus cum illum sunt dolorem et ratione, provident est suscipit sed neque expedita? Animi, ipsum, eveniet dolore nesciunt corporis iusto impedit omnis!</p>
									</div>
									<div role="tabpanel" class="tab-pane" id="Addition"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nihil iure, delectus, expedita itaque tempore autem deleniti, soluta enim, totam ducimus molestiae! Ad officiis a, reiciendis sed et excepturi nostrum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nihil iure, delectus, expedita itaque tempore autem deleniti, soluta enim, totam ducimus molestiae! Ad officiis a, reiciendis sed et excepturi nostrum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nihil iure, delectus, expedita itaque tempore autem deleniti, soluta enim, totam ducimus molestiae! Ad officiis a, reiciendis sed et excepturi nostrum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nihil iure, delectus, expedita itaque tempore autem deleniti, soluta enim, totam ducimus molestiae! Ad officiis a, reiciendis sed et excepturi nostrum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nihil iure, delectus, expedita itaque tempore autem deleniti, soluta enim, totam ducimus molestiae! Ad officiis a, reiciendis sed et excepturi nostrum.</p></div>
									<div role="tabpanel" class="tab-pane active" id="Review">
										@if(isset($comment))
											@foreach($comment as $com)
											<div class="comment">
												<div class="media">
													<a class="pull-left" href="#">
														<img class="media-object img-circle" src="https://www.gravatar.com/avatar/{{md5($com->email)}}" alt="Image" width="40px">
													</a>
													<div class="media-body">
														<h4 class="media-heading">{{$com->name}}</h4><span> | {{$com->created_at->diffForHumans()}}</span>
														<p>{{$com->content}}</p>
													</div>
												</div>
											</div>
											@endforeach
										@else
											<div class="comment">
												<div class="media">
													<a class="pull-left" href="#">
														<img class="media-object img-circle" src="" alt="Image">
													</a>
													<div class="media-body">
														<h4 class="media-heading">name</h4><span>| 2 days ago</span>
														<p>chưa có bình luận nào</p>
													</div>
												</div>
											</div>
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="product-detail-review col-md-12">
							<form action="{{route('comment',['slug' => $prod->slug ])}}" method="POST" class="form-horizontal" role="form">
								@csrf
									<div class="form-group">
										<div class="col-md-6">
											<input type="text" name="name" id=""  placeholder="Your Name">
										</div>
										<div class="col-md-6">
											<input type="text" name="email" id="" placeholder="E-Mail Address">
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<textarea name="content" id="input" class="form-control" rows="5" required="required" placeholder="Your Text here"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<input type="submit" value="Comment" class="btn btn-danger btn-review">
										</div>
									</div>
							</form>
						</div>
						<div class="product-detail-related">
							<div class="related-item text-center">
								<h2>RELATED PRODUCT</h2>
							</div>
							<div class="related-item">
								@foreach($related_pro as $rlpro)
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div class="thumbnail">
									<a href=""><img src="{{url('public/uploads/product')}}/{{$rlpro->image}}" alt=""></a>
										<div class="caption text-center">
										<h4>{{$rlpro->name}}</h4>
											<img src="images/icons/icon-star.png" alt="">
											<p>
												{{$rlpro->sale_price == 0 ? number_format($rlpro->price).' đ' : number_format($rlpro->sale_price).' đ'}}
											</p>
											<p>
												<a href="{{route('pro_detail',['slug' => $rlpro->slug])}}" class="btn btn-success">Detail</a>
												<a href="{{route('cart.add',['id'=>$rlpro->id])}}" class="btn btn-primary">Add To Cart</a>
											</p>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end main-content-product-tail -->

		
@stop()
