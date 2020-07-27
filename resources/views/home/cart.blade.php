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
		<div class="main-content-cart">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<table class="table table-hover">
							@if(Session::has('success'))
							<div class="alert alert-success text-center">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('success')}}
							@endif
							<thead>
								<tr>
									<th>Ảnh Và Tên Sán Phẩm</th>
									<th>Giá Sản Phẩm</th>
									<th>Số Lượng</th>
									<th>Tổng Tiền</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							
								@foreach($carts->items as $item)
								<tr>
									
									<td class="pro-img-name"><img src="{{url('public/uploads')}}/product/{{$item['image']}}" alt="" width="90"><span class="name-pro">{{$item['name']}}</span></td>
									<td class="pro-price" style="color: red;">{{number_format($item['price'])}} đ</td>
									<td class="pro-input-cart">
										<form action="{{route('cart.update',['id'=>$item['id']])}}" method="GET" role="form">
												<input type="number"  class="text-center input-cart" name="quantity" value="{{$item['quantity']}}">
											<button type="submit" class="btn btn-primary btn-sm glyphicon glyphicon-pencil"></button>
										</form>

									</td>
									<td class="pro-total-cart" style="color: red;">{{number_format($item['quantity']*$item['price'])}} đ</td>
									<th class="pro-delete"><a href="{{route('cart.remove',['id'=>$item['id']])}}"><img src="{{url('public/home')}}/images/icons/Trash_icon.png" alt=""></a></th>
								</tr>
								
								@endforeach
							</tbody>
						</table>
						<div class="clear-update-shop-cart">
							<div class="row">
								<div class="col-md-3">
									<a href="{{route('cart.clear')}}" class="btn btn-danger clear">Xóa Toàn Bộ Giỏ Hàng</a>
								</div>
								
								<div class="col-md-9 text-right">
									<a href=""  class="btn btn-danger cart-continue">Tiếp Tục Mua Hàng</a>
								</div>
							</div>
						</div>
						<div class="cart-check">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 cart-check-my">
									<table cellspacing="0" class="cart-totals" width="100%">
										<tr class="cart_table_item">
											<th>
												<span class="my-cart-total" >Tổng Giỏ Hàng</span><br>
												<!-- <span class="">Subtotal</span><br>
												<span class="">Shipping Cost</span><br>
												<span class="">Total</span><br> -->
											</th>
											<td class="product-price">
												<span class=""></span><br>
												<!-- <span class="amount">999,000$</span><br>
												<span class="amount">0$</span><br>
												<span class="amount">999,000$</span><br>
											</td> -->
										</tr>
										<tr class="cart_table_item">
											<th>
												Tổng:
											</th>
											<td class="">
												<span class="amount"  style="color: red;">{{number_format($carts->total_price)}} đ</span>
											</td>
										</tr>
										<tr class="cart_table_item">
											<th>
												Phí Vận Chuyển:
											</th>
											<td class="">
												<span class="amount"  style="color: red;">Free</span>
											</td>
										</tr>
										<tr class="cart_table_item">
											<th>
												Tổng Tiền :
											</th>
											<td class="product-price">
												<span class="amount" style="color: red;">{{number_format($carts->total_price)}} đ</span>
											</td>
										</tr>
									</table>
									<a href="{{route('checkout')}}" class="btn btn-danger btn-proceed" >Tiến Hành Đặt Hàng</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop()
