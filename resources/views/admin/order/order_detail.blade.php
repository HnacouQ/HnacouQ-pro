@extends('layouts.admin')
@section('title','Chi Tiết Đơn Hàng')
@section('content')
<h3 style="font-family: roboto">Chi Tiết Đơn Hàng Của khách hàng: {{$ord->name}}</h3>
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
<h3 style="font-family: roboto">Tổng giá trị đơn hàng : {{number_format($total_price)}} đ</h3>

@stop()
