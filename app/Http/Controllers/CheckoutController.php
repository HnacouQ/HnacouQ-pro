<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Order;
use App\models\OrderDetail;
use App\helper\Cart;
use App\Http\Requests\Home\Checkout;
use Auth;
use Mail;


class CheckoutController extends Controller
{
    //

    public function __construct(){
        $this->middleware('cus');
    }

     public function form(){
        return view('home.checkout');
    
    }

     public function post_form(Checkout $Request, Cart $cart){

        $cus_id = Auth::guard('cus')->user()->id;
        $name = Auth::guard('cus')->user()->name;
        $phone = Auth::guard('cus')->user()->phone;
        $email = Auth::guard('cus')->user()->email;
        $address = Auth::guard('cus')->user()->address;

        //kiểm tra giỏ hàng có hay không nếu có thì thực hiện 
        //Không có thì về trang 404
        if($cart->items){
            
            // lấy thông tin đưa vào bảng order...
        
            if ( $order = Order::create([
                'name' => $Request->name,
                'phone' => $Request->phone,
                'email' => $Request->email,
                'address' => $Request->address,
                'customer_id'=> $cus_id,
                'order_note' => $Request->order_note,
                'payment_method'=> $Request->payment_method,
            ])) {
                //Tạo chi tiết đơn hàng 
                $order_id = $order->id;
                foreach ($cart->items as $product_id => $item) {
                    
                    $quantity = $item['quantity'];
                    $price = $item['price'];
                    // dd($cart->items);
                    OrderDetail::create([
                        'order_id'=> $order_id,
                        'product_id'=> $product_id,
                        'quantity'=> $quantity,
                        'price'=> $price
                    ]);
                   
                    
                }
    
                Mail::send('email.order',[
                'order'=> $order,
                'items'=> $cart->items,
                'name' => $name
              ],function($mail) use($email,$name){
                $mail->to( $email,$name);
                $mail->from('quocanh2298@gmail.com');
                $mail->subject('HnacouQ-Shop: Đặt hàng thành công!!!');
              });
    
                session(['cart'=>'']);
                    return redirect()->route('cart')->with('success','Đặt hàng thành công vui lòng kiểm tra lại email cảm ơn bạn!!');
            }else{
                 return redirect()->route('cart')->with('success','Đặt hàng không thành công vui lòng thử lại...');
            }
        }else{
            return view('home.404');
        }

        
       
    }

    






    
}
