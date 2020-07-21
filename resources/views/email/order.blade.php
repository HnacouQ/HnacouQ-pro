<h3>Xin chào {{$name}}</h3>

<p>Bạn đã đặt hàng thành công tại của hàng: HnacouQ-Shop!!! Cảm ơn bạn!</p>
<h4>-----Thông tin đơn hàng của bạn------</h4>
<h4>Mã đơn hàng của bạn:{{$order->id}}  </h4>
<h4>Ngày đặt:{{$order->created_at}}</h4>
<h4>Chi tiết đơn hàng</h4>
<table border="1" cellpadding="10" cellspacing="0" width="500">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên Sán Phẩm</th>
			<th>Giá Sản Phẩm</th>
			<th>Số Lượng</th>
			<th>Tổng Tiền</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $n = 1; ?>
		@foreach($carts->items as $item)
		<tr>
			<td>{{$n}}</td>
			<td>{{$item['name']}}</td>
			<td>{{number_format($item['price'])}} đ</td>
			<td>{{$item['quantity']}}</td>
			<td>{{number_format($item['quantity']*$item['price'])}} đ</td>
		</tr>
		<?php $n++; ?>
		@endforeach

	</tbody>
</table>
<h4>Phí vận chuyển: {{number_format($carts->ship_price)}} đ</h4>
<h4>Tổng tiền đơn hàng của bạn: {{number_format($carts->total_price-$carts->ship_price)}} đ</h4>

