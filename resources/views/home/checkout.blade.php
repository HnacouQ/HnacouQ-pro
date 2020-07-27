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
		
		<!-- begin-main-content-cart -->
		<div class="main-content-checkout">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form action="" method="POST" class="form-horizontal" role="form">
							@csrf
							<div class="col-md-6 my-checkout">
							
								<legend style="font-size: 28px;">Contact Information</legend>
							
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control" name="name" value="{{Auth::guard('cus')->user()->name}}" id="" >
								</div>
								<div class="form-group">
									<label for="">phone</label>
									<input type="text" class="form-control" name="phone" value="{{Auth::guard('cus')->user()->phone}}" id="" >
								</div>
								<div class="form-group">
									<label for="">Email</label>
									<input type="text" class="form-control" name="email" value="{{Auth::guard('cus')->user()->email}}" id="" >
								</div>
								<div class="form-group">
									<label for="">Address</label>
									<input type="text" class="form-control" name="address" value="{{Auth::guard('cus')->user()->address}}" id="" >
								</div>
								<div class="form-group">
								  <label for="exampleFormControlTextarea1">Order Notes</label>
								  <textarea class="form-control rounded-0" name="order_note" id="exampleFormControlTextarea1" rows="4"></textarea>
								</div>
							</div>
							<div class="col-md-6 your-order">
								<table cellspacing="0" class="cart-totals" width="100%">
									<tr class="cart-table-item">
										<th><h2 class="text-center">Your Order</h2></th>
									</tr>
									<tr class="cart_table_item">
										<th style="">
											<span class="list-pro" >Product</span><br>
											@foreach($carts->items as $item)
											<span class="product-name">{{$item['name']}}({{$item['quantity']}})</span><br>
											@endforeach
										</th>
										<td class="product-price">
											<span></span><br>
											@foreach($carts->items as $item)
											<span class="amount ">{{number_format($item['quantity']*$item['price'])}} đ</span><br>
											@endforeach
											

										</td>
									</tr>
									<tr class="cart-subtotal">
										<th>
											Cart Subtotal
										</th>
										<td class="product-price">
											<span class="amount">{{number_format($carts->total_price)}}</span>
										</td>
									</tr>
									<tr class="shipping">
										<th>
											Shipping
										</th>
										<td class="product-price">
											<span class="amount">Free</span>
										</td>
									</tr>
									<tr class="total">
										<th>
											Total
										</th>
										<td class="product-price">
											<span class="amount" style="color: red;">{{number_format($carts->total_price)}} đ</span>
										</td>
									</tr>
								</table>
								<h4 class="title-payment text-center">Payment Method</h4>
								<div class="Payment-Method">
									<div class="panel panel-default check-method">
										<div class="panel-heading check-method">
											<h5 class="panel-title"> <label>
												<input type="radio" id="radio1" name="payment_method" value="0" checked>
												 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >Check Payment</a></label>
											</h5>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in">
											<div class="panel-body"> 
												<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
											</div>
										</div>
										</div>
										<div class="panel panel-default check-method">
											<div class="panel-heading check-method">
												<h5 class="panel-title"> <label><input type="radio" id="radio1" name="payment_method" value="1"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2">Paypal</a></label>
												</h5>
											</div>
										<div id="collapseOne2" class="panel-collapse collapse ">
											<div class="panel-body"> 
												<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
											</div>
										</div>
									</div>
								</div>
								<p><input type="submit" value="Place Order" class="btn btn-primary btn-block btn-sm btn-checkout" data-loading-text="Loading..."></p>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
@stop()
