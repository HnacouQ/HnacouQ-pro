@extends('layouts.admin')
@section('title','Product')
@section('content')

<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="email" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
			<span><a href="{{route('product.create')}}" class="btn btn-primary glyphicon glyphicon-plus "></a></span>
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
				<th>Ảnh sản phẩm</th>
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
				<td><img src="{{url('public/uploads/product')}}/{{$pro->image}}" alt="" width="60"></td>
				<td>{{$pro->name}}</td>
				
				<td>{{$pro->status}}</td>
				<td>{{$pro->created_at}}</td>
				<td>

					<form action="{{ route('product.destroy', $pro->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('product.edit',$pro->id)}}" class="btn btn-primary 	glyphicon glyphicon-pencil"></a>
					<button type="submit" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('ban chac chua?')"></button>
					<a href="{{route('product.show',$pro->id)}}" class="btn btn-warning glyphicon glyphicon-eye-open" ></a>
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
