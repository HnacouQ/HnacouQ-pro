@extends('layouts.admin')
@section('title','Product')
@section('content')

<form action="{{route('search_pro')}}" method="GET" class="form-inline" role="form">
			<div class="form-group">

				<label class="sr-only"  for="">label</label>
				<input type="search" name = "search" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
			<span><a href="{{route('product.create')}}" class="btn btn-primary glyphicon glyphicon-plus "></a></span>
		</form>
	<table class="table table-hover">
		@if(Session::has('success'))
		<div class="alert alert-success text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
		@endif
		</div>
		@if(Session::has('error'))
		<div class="alert alert-success text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('error')}}
		@endif
		</div>
		
		<thead>
			<tr>
				<th>STT</th>
				<th>Image</th>
				<th>Name</th>
				
				<th>Status</th>
				<th>Created_at</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $pro)
			<tr>
				<td>{{$pro->id}}</td>
				<td><img src="{{url('public/uploads/product')}}/{{$pro->image}}" alt="" width="60"></td>
				<td>{{$pro->name}}</td>
				
				<td>{{$pro->status}}</td>
				<td>{{date('d/m/Y',strTotime($pro->created_at))}}</td>
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
