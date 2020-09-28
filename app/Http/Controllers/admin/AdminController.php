<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Customer;
use App\models\Product;
use App\models\Order;
use App\models\OrderDetail;
use App\User;
use DB;
use Auth;


class AdminController extends Controller
{
    //
     public function index()
    {

        $current = date('Y-m-d');

        // đơn hàng hôm nay
        $or_news = Order::where('created_at','like','%'.$current.'%')->get();
        

        // đơn hàng mới nhất
        // $or_news = Order::orderBy('created_at','DESC')->limit(5)->get();

        // dd($total_order);
        return view('admin.index' , compact('or_news'));
    }

    public function logout(){
			Auth::logout();
			return redirect()->route('login');	 	
		}


    public function list_order(){

        $or = Order::orderBy('id','DESC')->paginate(5);

        $date_from = request()->date_from;
        $date_to = request()->date_to;

        if(request()->date_from && request()->date_to){
            $or = Order::orderBy('id','DESC')->whereBetween('created_at', [$date_from, $date_to])->paginate(5);
        }

        return view('admin.order.index',compact('or'));
    }     


    public function update_order(Request $request){
        
        $id = $request->id;
        $status = $request->status;
        $data = Order::find($id);

        // dd($id);

        Order::where(['id'=> $id])->update([
            'status' => $status
        ]);

        return [
            'title' => 'success',
            'message' => 'Update Status Successfully!!',
        ];  

       
    } 
    
    public function order_detail($id){
        $ord = Order::find($id);
        // dd($ord->name);
        $or_de = OrderDetail::where(['order_id'=> $id])->get();
        // dd($or_de);
        if($or_de){
            return view('admin.order.order_detail',compact('ord','or_de'));

        }else{
            return redirect()->back()->with('error','...');
        }
    } 

    public function search_order(){

        $date_from = isset($_GET['date_from']) ? $_GET['date_from'] : '';
        $date_to = isset($_GET['date_to']) ? $_GET['date_to'] : '';


        $or_news = DB::table('orders')->where('status',0)->whereBetween('created_at', [$date_from, $date_to])->get();

        // dd($or_news);

        return view('admin.index' , compact('or_news'));



    }
   

        
		
}

