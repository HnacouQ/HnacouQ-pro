@extends('layouts.home')

@section('content')
		<div class="banner">
			<div class="container">
				<div class="banner-content">
					<img src="{{url('public/home')}}/images/banners/banner2.png" alt="">
					<div class="banner-content-detail text-center">
						<h1>SHOP PAGE</h1>
						<i class="fas fa-home"></i><span> Home </span><i class="fas fa-angle-double-right"></i><span style="color: red;"> Shop Page</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end-banner -->
		
		<div class="main-content-shop-page">
			<div class="container">
				
					<h2>My Order</h2>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Order Note</th>
								<th>Payment Method</th>
								<th>Status</th>
								<th>Created at</th>
								<th>Detail</th>
								
								
								
							</tr>
						</thead>
						<tbody>
							@foreach($my_or as $my_order)
								<tr>
								<td>{{$my_order->order_note}}</td>
								<td>{{$my_order->payment_method == 0 ? 'Thanh toán trực tiếp' : 'Tài khoản ngân hàng'}}</td>
								@if($my_order->status == 0)
								<td>Đang xử lý</td>
								@elseif($my_order->status == 1)
								<td>Giao hàng thành công</td>
								@elseif($my_order->status == 2)
								<td>Đơn hàng đã hủy</td>
								@endif
								<td>{{date('d/m/Y H:i',strTotime($my_order->created_at))}}</td>
								<td><a href="{{route('home_or_detail',['id'=>$my_order->id])}}" class="btn btn-warning">Detail</a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$my_or->links()}}
					

			
			</div>
		</div>

		
@stop()
