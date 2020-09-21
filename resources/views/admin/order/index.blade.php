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
				<th>Customer Name</th>
				<th>Order Note</th>
				<th>Payment Method</th>
				<th>Status</th>
				<th>Order Date</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			@foreach($or as $data)

			<tr>
				<td>{{$data->cus->name}}</td>
				<td>{{$data->order_note}}</td>
				@if($data->payment_method == 1)
				<td>Online Payment</td>
				@else
				<td>Direct Payment</td>
				@endif
				<td><select name="status" id="input" class="form-control update_status_order" data-id="{{$data->id}}">
					@if($data->status == 0)
						<option value="{{$data->status}}" selected >processing</option>
						<option value="1">Delivered</option>
						<option value="2">Canceled Order</option>
					@elseif($data->status == 1)
						<option value="{{$data->status}}" selected >Delivered</option>
						<option value="0">processing</option>
						<option value="2">Canceled Order</option>
					@elseif($data->status == 2)
						<option value="{{$data->status}}" selected >Canceled Order</option>
						<option value="0">processing</option>
						<option value="1">Delivered</option>
					@endif
					
					
				</select></td>
				<td>{{date('d/m/Y H:i',strTotime($data->created_at))}}</td>
				<td>
					<a href="{{route('order_detail',['id' => $data->id])}}" class="btn btn-sm btn-warning glyphicon glyphicon-eye-open"></a>
					
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>	
	{{$or->links()}}
@stop()
