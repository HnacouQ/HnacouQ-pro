@extends('layouts.admin')
@section('title','Danh Sách Đơn Hàng')
@section('content')
<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="email" class="form-control" id="" placeholder="Search....">
				<input type="email" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
		</form>
	
<table class="table table-bordered table-hover ">
	@if(Session::has('success'))
		<div class="alert alert-success text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
		@endif
		<thead>
			<tr>
				<th>Tên Khách hàng</th>
				<th>Ghi Chú Đơn Hàng</th>
				<th>Phương Thức Thanh Toán</th>
				<th>Trạng Thái đơn hàng</th>
				<th>Ngày Đặt hàng</th>
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($or as $data)

			<tr>
				<td>{{$data->name}}</td>
				<td>{{$data->order_note}}</td>
				@if($data->payment_method == 1)
				<td>Tài khoản ngân hàng</td>
				@else
				<td>Thanh toán trực tiếp</td>
				@endif
				@if($data->status == 0)
				<td>chưa giao hàng</td>
				@else
				<td>Đã giao hàng</td>
				@endif
				<td>{{date('d/m/Y H:i',strTotime($data->created_at))}}</td>
				<td>
					<a href="{{route('order_detail',['id' => $data->id])}}" class="btn btn-sm btn-warning glyphicon glyphicon-eye-open"></a>
					<a href="{{route('update_order',['id' => $data->id])}}" class="btn btn-sm btn-primary glyphicon glyphicon-pencil"></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>	
@stop()
