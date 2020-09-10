@extends('layouts.admin')

@section('title','Sửa đổi banner')
@section('content')
<form action="{{route('banner.update',$data->id)}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	
	<div class="row">
			<div class="col-md-12">
				<div class="form-group">
				<label for="">Name banner</label>
				<input type="text" name="name" class="form-control" value="{{$data->name}}" id="name">
				@error('name')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Type Banner</label>
				<input type="number" name="type" value="{{$data->type}}" class="form-control">
				@error('type')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Image</label>
				<input type="hidden" name="image" value="{{$data->image}}">
				<input type="file" name="upload" class="form-control" id="">
				<img src="{{url('')}}/public/uploads/banner/{{$data->image}}" width="60px" alt="">{{$data->image}}
				 @error('upload')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
		</div>
			</div>
	

	<button type="submit" class="btn btn-primary">Edit</button>
</form>
@stop()
