@extends('layouts.admin')
@section('title','Sản Phẩm :'.$data->name)
@section('content')

	<div class="container" >
		<div class="row">
			<div class="col-md-3 text-center">
				<img src="{{url('public/uploads/product')}}/{{$data->image}}" alt=""width="200">
			</div>
			<div class="col-md-9 text-left">
				<h4>Tên Sản Phẩm: {{$data->name}}</h4>
				<h4>Giá Sản Phẩm: {{number_format($data->price)}} đ</h4>
				<h4>Giá Khuyến Mãi: {{number_format($data->sale_price)}} đ</h4>
				<h4>Nội Dung Mô tả: {{$data->content}}</h4>
				<h4>Tên Danh mục: {{$data->cat->name}}</h4>
				<h4>Trạng Thái: {{$data->status==0?'hiển thị':'ẩn'}}</h4>
				<h4>Ngày tạo: {{$data->created_at}}</h4>
				<h4>Ngày Sửa đổi: {{$data->updated_at}}</h4>
				<a href="{{route('product.index')}}" class="btn btn-success">Back</a>

			</div>
		</div>
	</div>
	
	
@stop()
