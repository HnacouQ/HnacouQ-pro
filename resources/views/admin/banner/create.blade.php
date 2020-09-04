@extends('layouts.admin')

@section('title','Thêm banner')
@section('content')
<form action="{{route('banner.store')}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	<div class="row">
			<div class="col-md-12">
				<div class="form-group">
				<label for="">Tên banner</label>
				<input type="text" name="name" class="form-control" id="name">
				@error('name')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="">Loại Banner</label>
				<input type="number" name="type" class="form-control">
				@error('type')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="">Ảnh</label>
				<input type="file" name="upload" class="form-control" id="">
				@error('upload')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
		</div>
			</div>
	

	<button type="submit" class="btn btn-primary">Thêm Mới</button>
</form>
@stop()
