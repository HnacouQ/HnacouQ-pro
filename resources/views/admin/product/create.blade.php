@extends('layouts.admin')

@section('title','Thêm sản phẩm')
@section('content')
<form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Name</label>
			<input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
				@error('name')
				<small class="help-block " style="color:red">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Slug</label>
				<input type="text" name="slug" class="form-control" id="slug" value="{{old('slug')}}">
				@error('slug')
				<small class="help-block" style="color:red">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="content" id="summernote" class="form-control" rows="3">{{old('content')}}</textarea>
				@error('content')
				<small class="help-block" style="color:red">{{$message}}</small>
				@enderror
			</div>
			
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Category Name</label>
				<select name="category_id" id="input" class="form-control" required="required">
					<option value="">Choose one</option>
					@foreach($cats as $cat)
					<option value="{{$cat->id}}">{{$cat->name}}</option>
					@endforeach
				</select>
				@error('category_id')
				<small class="help-block" style="color:red">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" name="price" class="form-control" id="" value="{{old('price')}}">
				@error('price')
				<small class="help-block" style="color:red">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Sale_price</label>
				<input type="text" name="sale_price" class="form-control" id="" value="{{old('sale_price')}}">
				@error('sale_price')
				<small class="help-block" style="color:red">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Status</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" id="input" value="0" checked="checked">
						Hide
					</label>
					<label>
						<input type="radio" name="status" id="input" value="1">
						Show
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file" name="upload" class="form-control" id="">
				@error('upload')
				<small class="help-block" style="color:red">{{$message}}</small>
				@enderror
			</div>
			
		</div>
	</div>
	

	<button type="submit" class="btn btn-primary">Add</button>
</form>
@stop()
@section('js')
<script src="{{url('public/ad')}}/js/slug.js"></script>
@stop()
