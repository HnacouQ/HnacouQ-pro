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
    	  if($pro){
           $cart->add( $pro,$quantity);
         }else{
          return view('home.404');
         }

        

        return redirect()->route('cart')->with('success','Thêm Vào Giỏ Hàng Thành Công');
    }
    public function remove($id,Cart $cart){
       $pro = Product::find($id);

       if($pro){
          $cart ->remove($id);

          return redirect()->route('cart')->with('success','Xóa Khỏi Giỏ Hàng Thành Công');
       }else{
         return view('home.404');
       }

        
    	
    }
    public function update($id,Cart $cart){

      // dd($cart->total_price);

        $pro = Product::find($id);



        $quantity = Request()->quantity;


        if($pro){
          if(is_numeric($quantity)){
          $succ =  $cart->update($id,$quantity);
          return [
            'title' => 'success',
            'message' => 'Bạn đã cập nhật giỏ hàng thành công!!',
            'total_price' => $cart->total_price,

          ];

          // return redirect()->route('cart')->with('success','Xóa Khỏi Giỏ Hàng Thành Công');

        }else{
          return[
            'title' => 'warning',
            'message' => 'Bạn nhập số lượng sai!!',
          ];
        } 
      }else{
        return view('home.404');
      }

        
    }
    public function clear(Cart $cart){

    	$cart->clear();

          return redirect()->route('cart')->with('success','Xóa Hết Giỏ Hàng Thành Công');
    }
}
