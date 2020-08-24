@extends('layouts.admin')

@section('title','Sửa đổi banner')
@section('content')
<form action="{{route('banner.update',$data->id)}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	
	<div class="row">
			<div class="col-md-12">
				<div class="form-group">
				<label for="">Tên banner</label>
				<input type="text" name="name" class="form-control" value="{{$data->name}}" id="name">
			</div>
			@if($errors->has('name'))
			{{$errors->first('name')}}
			@endif
			<div class="form-group">
				<label for="">Loại Banner</label>
				<input type="number" name="type" value="{{$data->type}}" class="form-control">
			</div>
			@if($errors->has('type'))
			{{$errors->first('type')}}
			@endif
			<div class="form-group">
				<label for="">Ảnh</label>
				<input type="file" name="upload" class="form-control" id="">
				 <img src="{{url('')}}/public/uploads/banner/{{$data->image}}" width="60px" alt="">{{$data->image}}
			</div>
			@if($errors->has('upload'))
			{{$errors->first('upload')}}
			@endif
		</div>
			</div>
	

	<button type="submit" class="btn btn-primary">Edit</button>
</form>
@stop()
