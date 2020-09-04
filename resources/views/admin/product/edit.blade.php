@extends('layouts.admin')

@section('title','Sửa sản phẩm')
@section('content')
<form action="{{route('product.update',$data->id)}}" method="POST" role="form" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<div class="row">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
				@error('name')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Slug</label>
				<input type="text" name="slug" class="form-control" id="slug" value="{{$data->slug}}">
				@error('slug')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Mô tả sản phẩm</label>
				<textarea name="content" id="input" class="form-control"  rows="3">{{$data->content}}</textarea>
				@error('content')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Tên danh mục</label>
				<select name="category_id" id="input" class="form-control" required="required">
					<option value="">Chọn một</option>
					@foreach($cats as $cat)
					<?php $select = $cat->id == $data->category_id ? 'selected' : ''; ?>
					<option <?php echo $select; ?> value="{{$cat->id}}">{{$cat->name}}</option>
					@endforeach
				</select>
				@error('category_id')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			<div class="form-group">
				<label for="">Giá sản phẩm</label>
				<input type="text" name="price" class="form-control" value="{{$data->price}}" id="">
				@error('price')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Giá khuyến mãi</label>
				<input type="text" name="sale_price" class="form-control" value="{{$data->sale_price}}" id="">
				@error('sale_price')
				<small class="help-block">{{$message}}</small>
				@enderror
			</div>
			
			<div class="form-group">
				<label for="">Trạng Thái</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" id="input" value="0" <?php echo $data->status == 0 ? 'checked' : ''; ?>>
						Ẩn
					</label>
					<label>
						<input type="radio" name="status" id="input" value="1" <?php echo $data->status == 1 ? 'checked' : ''; ?> >
						Hiện
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="">Ảnh</label>
				<input type="hidden" name="image" value="{{$data->image}}">
				<input type="file" name="upload" class="form-control" id="" >
				 <img src="{{url('')}}/public/uploads/product/{{$data->image}}" width="60px" alt="">{{$data->image}}
			</div>
			@error('upload')
			<small class="help-block">{{$message}}</small>
			@enderror
		</div>
	</div>
	

	<button type="Edit" class="btn btn-primary">Submit</button>
</form>
@stop()
@section('js')
<script src="{{url('public/ad')}}/js/slug.js"></script>
@stop()
