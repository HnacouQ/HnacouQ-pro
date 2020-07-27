<?php 
	
	namespace App\helper;

	/**
	 * 
	 */
	class Cart
	{
		public $items;
		public $total_quantity;
		public $total_price;
		
		
		function __construct()
		{
			# code...
			$this->items = session('cart') ? session('cart') : [];
			$this->total_quantity = $this->total_quantity();
			$this->total_price = $this->total_price();

		}

		public function add($pro,$quantity){

			if(isset($this->items[$pro->id])){
				$this->items[$pro->id]['quantity'] += $quantity;
			}else{
				$cart = [
				'id' => $pro->id,
				'name' => $pro->name,
				'image' => $pro->image,
				'price' => $pro->sale_price > 0  ? $pro->sale_price : $pro->price,
				'quantity' => $quantity,

			];
			$this->items[$pro->id] = $cart;
			}
			
			session(['cart' => $this->items]);


		}

		public function remove($id){
			if(isset($this->items[$id])){
				unset($this->items[$id]);
			}
			session(['cart' => $this->items]);
			
		}

		public function update($id,$quantity){
			$qtt = $quantity > 0 ? ceil($quantity) : 1;
			$qtt = $quantity < 50 ? ceil($quantity) : 50;
			if(isset($this->items[$id])){
				$this->items[$id]['quantity'] = $qtt;
			}
			session(['cart' => $this->items]);
			
		}

		public function clear(){

			session(['cart' => '']);
			
		}

		private function total_price(){
			$total = 0;
			foreach ($this->items as $key => $item) {
				# code...
				$total += $item['price']*$item['quantity'];
			}

			return $total;

		}

		private function total_quantity(){
			$total = 0;
			foreach ($this->items as $key => $item) {
				# code...
				$total += $item['quantity'];
			}

			return $total;
			
		}
	}
 ?>