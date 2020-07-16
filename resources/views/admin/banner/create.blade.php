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
			</div>
			@if($errors->has('name'))
			{{$errors->first('name')}}
			@endif
			<div class="form-group">
				<label for="">Loại Banner</label>
				<input type="number" name="type" class="form-control">
			</div>
			@if($errors->has('type'))
			{{$errors->first('type')}}
			@endif
			<div class="form-group">
				<label for="">Ảnh</label>
				<input type="file" name="upload" class="form-control" id="">
			</div>
			@if($errors->has('upload'))
			{{$errors->first('upload')}}
			@endif
		</div>
			</div>
	

	<button type="submit" class="btn btn-primary">Thêm Mới</button>
</form>
@stop()
