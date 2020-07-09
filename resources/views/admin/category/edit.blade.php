@extends('layouts.admin')

@section('title','Sửa Danh mục '.$data->name)
@section('content')
<form action="{{route('category.update',$data->id)}}" method="POST" role="form">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label for="">Tên Danh Mục</label>
		<input type="text" class="form-control" name="name" value="{{$data->name}}" id="" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
</form>
@stop()