<?php 

	namespace App\helper;
	/**
	 * 
	 */
	class Views
	{
		public $items;
		function __construct()
		{
			# code...
			$this->items = session('views') ? session('views') : [];

		}

		public function view($pro,$quantity){

			if(isset($this->items[$pro->id])){
				$this->items[$pro->id]['quantity'] += $quantity;
			}else{
				$view = [
				'id' => $pro->id,
				'name' => $pro->name,
				'image' => $pro->image,
				'price' => $pro->sale_price > 0  ? $pro->sale_price : $pro->price,
				'quantity' => $quantity,

			];
			$this->items[$pro->id] = $view;
			}
				

			session(['views' => $this->items]);


			// dd($this->items);




			


		}
	}

 ?>