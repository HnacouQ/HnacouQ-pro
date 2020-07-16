@extends('layouts.admin')
@section('title','Banner')
@section('content')
<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="email" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Search</button>
			<span><a href="{{route('banner.create')}}" class="btn btn-primary glyphicon glyphicon-plus "></a></span>
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
				<th>Tên banner</th>
				<th>Loại banner</th>
				<th>created-at</th>
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $ban)
			<tr>
				<td>{{$ban->id}}</td>
				<td>{{$ban->name}}</td>
				<td>{{$ban->type}}</td>
				<td>{{$ban->created_at}}</td>
				<td>

					<form action="{{ route('banner.destroy', $ban->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('banner.edit',$ban->id)}}" class="btn btn-primary glyphicon glyphicon-pencil"></a>
					<button type="submit" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Bạn đã chắc chắn chưa?')"></button>
					<a href="{{route('banner.show',$ban->id)}}" class="btn btn-primary glyphicon glyphicon-eye-open"></a>
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
