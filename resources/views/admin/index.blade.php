@extends('layouts.admin')
@section('title','Home')
@section('content')
<section class="content" style="height: auto !important; min-height: 0px !important;">
	<!-- Small boxes (Stat box) -->
	<div class="row">
	  <div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
		  <div class="inner text-center">
			<h3>{{ $product_count }}</h3>

			<p>Total Product</p>
		  </div>
		  <div class="icon">
			<i class="ion ion-bag"></i>
		  </div>
		  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	  </div>
	  <!-- ./col -->
	  <div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
		  <div class="inner text-center">
			<h3>{{ $order_count }}</h3>

			<p>Total Order</p>
		  </div>
		  <div class="icon">
			<i class="ion ion-stats-bars"></i>
		  </div>
		  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	  </div>
	  <!-- ./col -->
	  <div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
		  <div class="inner text-center">
			<h3>{{ $user_count }}</h3>

			<p>Total User</p>
		  </div>
		  <div class="icon">
			<i class="ion ion-person-add"></i>
		  </div>
		  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	  </div>
	  <!-- ./col -->
	  <div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
		  <div class="inner text-center">
			<h3>{{ $cus_count }}</h3>

			<p>Total Customer</p>
		  </div>
		  <div class="icon">
			<i class="ion ion-pie-graph"></i>
		  </div>
		  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	  </div>
	  <!-- ./col -->
	</div>
	<h3>Recent Order</h3>
	<form action="{{route('search_order')}}" method="GET" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="date" class="form-control" name="date_from" id="" placeholder="Search....">
				<input type="date" class="form-control" name="date_to" id="" placeholder="Search....">
			</div>
			<button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
		</form>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Customer Name</th>
				<th>Order Note</th>
				<th>Payment Method</th>
				<th>Status</th>
				<th>Order Date</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			@foreach($or_news as $data)
			<tr>
				<td>{{$data->name}}</td>
				<td>{{$data->order_note}}</td>
				@if($data->payment_method == 1)
				<td>Online Payment</td>
				@else
				<td>Direct Payment</td>
				@endif
				@if($data->status == 0)
				<td>Processing</td>
				@elseif($data->status == 1)
				<td>delivered</td>
				@elseif($data->status == 2)
				<td>Canceled Order</td>
				@endif
				<td>{{date('d/m/Y H:i',strTotime($data->created_at))}}</td>
				<td>
					<a href="{{route('order_detail',['id' => $data->id])}}" class="btn btn-sm btn-warning glyphicon glyphicon-eye-open"></a>
				</td>
			</tr>	
			@endforeach
		</tbody>
	</table>
	
</section>

@stop()