@extends('layouts.admin')
@section('title','Order Detail')
@section('content')
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

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total Price</th>
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
<h3 style="font-family: roboto">Totals Order : {{number_format($total_price)}} đ</h3>
<a href="{{route('list_order')}}" class="btn btn-success">Back</a>

@stop()
