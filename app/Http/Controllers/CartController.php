<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\helper\Cart;


class CartController extends Controller
{
    //

    // public function __construct(){
    //     $this->middleware('cus');
    // }

    public function index(){
        // $carts = session('cart');
      return view('home.cart');
    }
    public function add($id,$quantity = 1, Cart $cart){
        $pro = Product::find($id);
    	$cart->add( $pro,$quantity);

        return redirect()->route('cart')->with('success','Thêm Vào Giỏ Hàng Thành Công');
    }
    public function remove($id,Cart $cart){
        $cart ->remove($id);

          return redirect()->route('cart')->with('success','Xóa Khỏi Giỏ Hàng Thành Công');
    	
    }
    public function update($id,Cart $cart){
        $quantity = Request()->quantity;
        
        $cart->update($id,$quantity);

          return redirect()->route('cart')->with('success','Cập Nhật Giỏ Hàng Thành Công');

    	
    }
    public function clear(Cart $cart){

    	$cart->clear();

          return redirect()->route('cart')->with('success','Xóa Hết Giỏ Hàng Thành Công');
    }
}
