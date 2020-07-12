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
				<label for="">link banner</label>
				<input type="text" name="link" class="form-control" id="slug">
			</div>
			@if($errors->has('link'))
			{{$errors->first('link')}}
			@endif
			<div class="form-group">
				<label for="">ordering banner</label>
				<input type="text" name="ordering" class="form-control" id="slug">
			</div>
			@if($errors->has('ordering'))
			{{$errors->first('ordering')}}
			@endif
			<div class="form-group">
				<label for="">Mô tả banner</label>
				<textarea name="content" id="input" class="form-control" rows="3"></textarea>
			</div>
			@if($errors->has('content'))
			{{$errors->first('content')}}
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
