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
                     <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Thông tin chi tiết đơn hàng</h3>
                                    
                                        <h4>Tên khách hang: {{$ord->name}}</h4>
                                        <h4>Ngày đặt hàng: {{date('d/m/Y',strTotime($ord->created_at))}}</h4>
                                        <h4>Phương thức thanh toán: {{$ord->payment_method == 0 ? 'Thanh toán trực tiếp' : 'Tài khoản ngân hàng'}}</h4>
                                        @if($ord->status == 0)
                                        <h4>Trạng thái đơn hàng: Đang xử lý</h4>
                                        @elseif($ord->status == 1)
                                        <h4>Trạng thái đơn hàng: Giao hàng thành công</h4>
                                        @elseif($ord->status == 2)
                                        <h4>Trạng thái đơn hàng: Đơn hàng đã hủy</h4>
                                        @endif
                                        <h4>Địa chỉ nhận hàng: {{$ord->address}}</h4>
                                        <h4>SĐT: {{$ord->phone}}</h4>
                                    

                                </div>
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Thành Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total_price = 0 ?>
                                    @foreach($or_de as $data)
                                    <tr>
                                        <td>{{$data->pro->name}}</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>{{number_format($data->price)}} đ</td>
                                        <td>{{number_format($data->price * $data->quantity)}} đ</td>
                                    </tr>
                                    <?php $total_price += $data->price * $data->quantity;
                                     ?>
                                    @endforeach
                                    
                                </tbody>
                            </table>  
                            <div style ="margin-bottom: 30px">
                                 <h3 style="font-family: roboto">Tổng giá trị đơn hàng : {{number_format($total_price)}} đ</h3>
                             @if($data->order->status == 0)
                             <span><a href="{{route('del_order',['id'=>$ord->id])}}" class="btn btn-danger ">Hủy đơn</a></span>
                             @else
                             <span><a href="{{route('my_order',Auth::guard('cus')->user()->id)}}" class="btn btn-success ">Quay lại</a></span>
                             @endif
                            </div>     
					
                   	


					

			
			</div>
		</div>

		
@stop()
