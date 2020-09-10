@extends('layouts.admin')
@section('title','Product :'.$data->name)
@section('content')

	<div class="container" >
		<div class="row">
			<div class="col-md-3 text-center">
				<img src="{{url('public/uploads/product')}}/{{$data->image}}" alt=""width="200">
			</div>
			<div class="col-md-6 text-left">
				<h4>Product Name: {{$data->name}}</h4>
				<h4>Price: {{number_format($data->price)}} đ</h4>
				<h4>Sale Price: {{number_format($data->sale_price)}} đ</h4>
				<h4>Description: {{$data->content}}</h4>
				<h4>Category Name: {{$data->cat->name}}</h4>
				<h4>Status: {{$data->status==0?'Show':'Hide'}}</h4>
				<h4>Created At: {{$data->created_at}}</h4>
				<h4>Updated At: {{$data->updated_at}}</h4>
				<a href="{{route('product.index')}}" class="btn btn-success">Back</a>
			</div>
		</div>
	</div>
	
	
@stop()
