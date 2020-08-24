@extends('layouts.admin')

@section('title','Sửa đổi user')
@section('content')
<form action="{{route('user.update',$data->id)}}" method="POST" role="form">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
			<label for="">Tên user</label>
			<input type="text" name="name" class="form-control" value="{{$data->name}}" id="name">
		</div>
		@if($errors->has('name'))
		{{$errors->first('name')}}
		@endif
		<div class="form-group">
			<label for="">email</label>
			<input type="email" name="email" value="{{$data->email}}" class="form-control">
		</div>
		@if($errors->has('email'))
		{{$errors->first('email')}}
		@endif
		</div>
	</div>
	

	<button type="submit" class="btn btn-primary">Edit</button>
</form>
@stop()
