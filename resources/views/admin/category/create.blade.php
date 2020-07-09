@extends('layouts.admin')

@section('title','Thêm Danh mục Category')
@section('content')
<form action="{{route('category.store')}}" method="POST" role="form">
	@csrf
	<div class="form-group">
		<label for="">Tên Danh Mục</label>
		<input type="text" class="form-control" name="name" id="name" >
	</div>
	<div class="form-group">
		<label for="">Slug</label>
		<input type="text" class="form-control" name="slug" id="slug" >
	</div>
	<div class="form-group">
		<label for="">Status</label>
		<div class="radio">
			<label>
				<input type="radio" name="status" id="input" value="1" checked="checked">
				publish
			</label>
			<label>
				<input type="radio" name="status" id="input" value="0">
				un publish
			</label>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">ADD</button>
</form>
@stop()