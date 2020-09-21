@extends('layouts.home')

@section('content')
		<div class="banner">
				<div class="banner-content">
					<img src="{{url('public/home')}}/images/banners/banner2.png" alt="">
					<div class="banner-content-detail text-center">
						<h1>SHOP PAGE</h1>
						<i class="fas fa-home"></i><span> Home </span><i class="fas fa-angle-double-right"></i><span style="color: red;"> Shop Page</span>
					</div>
				</div>
		</div>
		<!-- end-banner -->
		
		<div class="main-content-shop-page">
			<div class="container">
                     <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Information detail your order</h3>
                                    
                                        <h4>Order: {{$ord->cus->name}}</h4>
                                        <h4>Order Date: {{date('d/m/Y',strTotime($ord->created_at))}}</h4>
                                        <h4>Payment method: {{$ord->payment_method == 0 ? 'Direct Payment' : 'Online Payment'}}</h4>
                                        @if($ord->status == 0)
                                        <h4>Status: Processing</h4>
                                        @elseif($ord->status == 1)
                                        <h4>Status: Delivered</h4>
                                        @elseif($ord->status == 2)
                                        <h4>Status: Canceled Order</h4>
                                        @endif
                                        <h4>Address: {{$ord->cus->address}}</h4>
                                        <h4>Phone: {{$ord->cus->phone}}</h4>
                                        <p>--------------------------------</p>
                                        <h3>Receiver's information:</h3>
                                        <h4>Name: {{$ord->name}}</h4>
                                        <h4>Address: {{$ord->address}}</h4>
                                        <h4>Phone: {{$ord->phone}}</h4>
                                        <p>--------------------------------</p>
                                    

                                </div>
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
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
                                 <h3 style="font-family: roboto">Totals : {{number_format($total_price)}} đ</h3>
                             @if($data->order->status == 0)
                             <span><a href="{{route('del_order',['id'=>$ord->id])}}" class="btn btn-danger ">Cancel</a></span>
                             @else
                             <span><a href="{{route('my_order',Auth::guard('cus')->user()->id)}}" class="btn btn-success ">Back</a></span>
                             @endif
                            </div>     
					
                   	


					

			
			</div>
		</div>

		
@stop()
