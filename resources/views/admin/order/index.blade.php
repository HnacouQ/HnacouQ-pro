@extends('layouts.admin')
@section('title','Danh Sách Đơn Hàng')
@section('content')
<form action="" method="GET" class="form-inline" role="form">
		
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="date" class="form-control" name="date_from" id="">
				<input type="date" class="form-control" name="date_to" id="">
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
				@elseif($data->status == 1)
				<td>Đã giao hàng</td>
				@elseif($data->status == 2)
				<td>Đã hủy đơn hàng</td>
				@endif
				<td>{{date('d/m/Y H:i',strTotime($data->created_at))}}</td>
				<td>
					<a href="{{route('order_detail',['id' => $data->id])}}" class="btn btn-sm btn-warning glyphicon glyphicon-eye-open"></a>
					@if($data->status === 0)
					<a href="{{route('update_order',['id' => $data->id])}}" class="btn btn-sm btn-primary glyphicon glyphicon-pencil"></a>
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>	
	{{$or->links()}}
@stop()
