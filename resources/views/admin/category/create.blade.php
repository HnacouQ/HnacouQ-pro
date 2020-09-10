@extends('layouts.admin')

@section('title','Thêm Danh mục Category')
@section('content')
<form action="{{route('category.store')}}" method="POST" role="form" >
	@csrf
	<div class="form-group">
		<label for="">Category Name</label>
	<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" >
		@error('name')
		<small class="help-block">{{$message}}</small>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="">Slug</label>
		<input type="text" class="form-control" name="slug" id="slug" value="{{old('slug')}}" >
		@error('slug')
		<small class="help-block">{{$message}}</small>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="">Parent Category</label>
		<select name="parent_id" id="input" class="form-control" required="required">
			<option value="0">Parent</option>
			@foreach($category as $cats)
			<option value="{{$cats->id}}">{{$cats->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="">Status</label>
		<div class="radio">
			<label>
				<input type="radio" name="status" id="input" value="1" checked="checked">
				Show
			</label>
			<label>
				<input type="radio" name="status" id="input" value="0">
				Hide
			</label>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">ADD</button>
</form>
@stop()
@section('js')
<script src="{{url('public/ad')}}/js/slug.js"></script>
@stop()
