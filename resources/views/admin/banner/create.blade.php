@extends('layouts.admin')

@section('title','Thêm banner')
@section('content')
<form action="{{route('banner.store')}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	<div class="row">
			<div class="col-md-12">
				<div class="form-group">
				<label for="">Name banner</label>
				<input type="text" name="name" class="form-control" id="name">
				@error('name')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="">Type Banner</label>
				<input type="number" name="type" class="form-control">
				@error('type')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file" name="upload" class="form-control" id="">
				@error('upload')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
		</div>
			</div>
	

	<button type="submit" class="btn btn-primary">Add</button>
</form>
@stop()
