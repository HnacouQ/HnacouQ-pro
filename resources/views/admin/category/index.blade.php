@extends('layouts.admin')
@section('title','Category')
@section('content')
<form action="{{route('search_cat')}}" method="GET" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="search" name = "search" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
			<span><a href="{{route('category.create')}}" class="btn btn-primary  glyphicon glyphicon-plus"></a></span>
		</form>
	<table class="table table-hover">
		@if(Session::has('success'))
		<div class="alert alert-success text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('success')}}
		</div>
		@endif
		@if(Session::has('error'))
		<div class="alert alert-danger text-center">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{Session::get('error')}}
		</div>
		@endif
		
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>status</th>
				<th>created_at</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $cat)
			<tr>
				<td>{{$cat->id}}</td>
				<td>{{$cat->name}}</td>
				<td>{{$cat->status}}</td>
				<td>{{date('d/m/Y',strTotime($cat->created_at))}}</td>
				<td>

					<form action="{{ route('category.destroy', $cat->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary glyphicon glyphicon-pencil"></a>
					<button type="submit" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('ban chac chua?')"></button>
					<a href="{{route('category.show',$cat->id)}}" class="btn btn-primary glyphicon glyphicon-eye-open"></a>
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
