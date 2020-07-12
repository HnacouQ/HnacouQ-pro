@extends('layouts.admin')

@section('title','Sửa Danh mục '.$data->name)
@section('content')
<form action="{{route('category.update',$data->id)}}" method="POST" role="form">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label for="">Tên Danh Mục</label>
		<input type="text" class="form-control" name="name" value="{{$data->name}}" id="name" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Tên Slug</label>
		<input type="text" class="form-control" name="slug" value="{{$data->slug}}" id="slug" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Trạng Thái</label>
		<div class="radio">
			<label>
				<input type="radio" name="status" id="input" value="1" checked>
				Hiện
			</label>
			<label>
				<input type="radio" name="status" id="input" value="0">
				Ẩn
			</label>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
</form>
@stop()
@section('js')
<script src="{{url('public/ad')}}/js/slug.js"></script>
@stop()