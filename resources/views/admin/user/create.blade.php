@extends('layouts.admin')

@section('title','Thêm user')
@section('content')
<form action="{{route('user.store')}}" method="POST" role="form">
	@csrf
	<div class="row">
			<div class="col-md-4">
				<div class="form-group">
				<label for="">Tên user</label>
				<input type="text" name="name" class="form-control" id="name">
			</div>
			@if($errors->has('name'))
			{{$errors->first('name')}}
			@endif
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" id="slug">
			</div>
			@if($errors->has('email'))
			{{$errors->first('email')}}
			@endif
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" id="">
			</div>
			@if($errors->has('password'))
			{{$errors->first('password')}}
			@endif
		</div>
			</div>
	

	<button type="submit" class="btn btn-primary">Thêm Mới</button>
</form>
@stop()
