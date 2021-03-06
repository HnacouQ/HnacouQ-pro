@extends('layouts.admin')
@section('title','Users')
@section('content')
<form action="{{route('search_user')}}" method="GET" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only"   for="">label</label>
				<input type="search" name="search" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
			<span><a href="{{route('user.create')}}" class="btn btn-primary glyphicon glyphicon-plus "></a></span>
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
				<th>Name</th>
				<th>Created At</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $us)
			<tr>
				<td>{{$us->id}}</td>
				<td>{{$us->name}}</td>
				<td>{{date('d/m/Y',strTotime($us->created_at))}}</td>
				<td>

					<form action="{{ route('user.destroy', $us->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('user.edit',$us->id)}}" class="btn btn-primary glyphicon glyphicon-pencil"></a>
					<button type="submit" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('ban chac chua?')"></button>
					
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
