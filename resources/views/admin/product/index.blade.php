@extends('layouts.admin')
@section('title','Category')
@section('content')
<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="email" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<span><a href="{{route('product.create')}}" class="btn btn-primary  ">ADD</a></span>
		</form>
	<table class="table table-hover">
		@if(Session::has('success'))
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
		@endif
		
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>trạng thái</th>
				<th>ngày tạo</th>
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $pro)
			<tr>
				<td>{{$pro->id}}</td>
				<td>{{$pro->name}}</td>
				<td>{{$pro->status}}</td>
				<td>{{$pro->created_at}}</td>
				<td>

					<form action="{{ route('product.destroy', $pro->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('product.edit',$pro->id)}}" class="btn btn-primary">Edit</a>
					<button type="submit" class="btn btn-danger" onclick="return confirm('ban chac chua?')">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="clearfix container">
		{{$data->links()}}
	</div>
@stop()