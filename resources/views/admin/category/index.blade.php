@extends('layouts.admin')
@section('title','Category')
@section('content')
<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="email" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<span><a href="{{route('category.create')}}" class="btn btn-primary  ">ADD</a></span>
		</form>
	<table class="table table-hover">
		@if(Session::has('success'))
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
		@endif
		
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>status</th>
				<th>created_at</th>
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $cat)
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->name}}</td>
				<td>{{$cat->status}}</td>
				<td>{{$cat->created_at}}</td>
				<td>

					<form action="{{ route('category.destroy', $cat->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary">Edit</a>
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