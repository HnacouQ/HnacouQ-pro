@extends('layouts.admin')
@section('title','Banner')
@section('content')
<form action="" method="POST" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="email" class="form-control" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<span><a href="{{route('user.create')}}" class="btn btn-primary  ">ADD</a></span>
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
				<th>Tên User</th>
				<th>Ngày Tạo</th>
				<th>Tùy Chọn</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $us)
			<tr>
				<td>{{$us->id}}</td>
				<td>{{$us->name}}</td>
				<td>{{$us->created_at}}</td>
				<td>

					<form action="{{ route('user.destroy', $us->id) }}" method="POST">
						@csrf
						<input type="hidden" name="_method" value="DELETE">
					<a href="{{route('user.edit',$us->id)}}" class="btn btn-primary">Edit</a>
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