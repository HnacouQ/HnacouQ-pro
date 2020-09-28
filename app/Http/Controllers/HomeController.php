<?php

namespace App\Http\Controllers;
use App\models\Product;
use Illuminate\Http\Request;
use App\models\Banner;
use App\models\Customer;
use App\models\Category;
use App\models\Order;
use App\models\OrderDetail;
use App\models\Comment;
use App\helper\Views;
use App\Http\Requests\Home\Login;
use App\Http\Requests\Home\Regis;
use Illuminate\Support\Facades\Crypt;

use DB;
use Auth;
use Mail;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {	
       
    	$all = Product::orderBy('id','DESC')->limit(4)->get();
    	$views = Product::orderBy('views','DESC')->limit(8)->get();
    	$sale = Product::where('sale_price','>', 0)->orderBy('sale_price','ASC')->limit(8)->get();
    	$asso = Product::where('category_id',3)->get();
      $banner = Banner::where('type',1)->get();

    	// dd($banner);
        return view('home.home', compact('all','views','sale','asso','banner'));
    }

    public function login(){
        return view('home.login');

    }

     public function post_login(Login $request){

        if (Auth::guard('cus')->attempt($request->only('email','password'),false)) {

            return redirect()->route('home');

        }else{
          
            return redirect()->back();
        }
        
    }

      public function logout(){
        Auth::guard('cus')->logout();
          return redirect()->route('home');

    }

    public function register(){
      return view('home.register');


    }

    public function post_register(Regis $request){

      if (Customer::create([
          'name' => $request->name,
          'phone' => $request->phone,
          'address' => $request->address,
          'email' => $request->email,
          'password' => bcrypt($request->password)
      ])) {
        return redirect()->route('home_login')->with('success','Bạn đã đăng ký thành công xin mời bạn đang nhập!!!');
      }else{
         return redirect()->route('home_login')->with('success','Bạn đã đăng ký không thành công xin mời bạn đang ký lại!!!');
      }

      

    }

    public function shop_page(){
      $product = Product::where('status',1)->orderBy('id','DESC')->paginate(6);
      return view('home.shop',compact('product'));
    }



    public function view($slug){
       $category = Category::all();
       // $data = Category::where('slug',$slug)->first();
       $data = DB::table('category')
        ->join('product', 'category.id', '=', 'product.category_id')
        ->select('category.id as cat_id','category.slug as cat_slug','product.name','product.image','product.id','product.slug','product.price','product.sale_price')
        ->where('category.slug',$slug)
        ->paginate(4);
        // dd($data==[]);
       // dd($prod);
      // $pro = Product::where('slug',$slug)->first();
       if ($data) {
         //có slug của danh mục thì lấy
          return view('home.shop_page_view',compact('category','data'));
       }else{
        return view('home.404');
       }

     
    }


    //view product_detail
    public function pro_detail($slug){

      

      $category = Category::all();

      $prod = Product::where('slug',$slug)->first();
      // dd($prod);

      //sản phẩm tương tự....
      

      // dd($related_pro);
      //lấy bình luận của sản phẩm
      $comment = Comment::where('com_slug',$slug)->get();
      if ($prod) {
        $related_pro = Product::where('category_id',$prod->category_id)->whereNotIn('slug',[$slug])->limit(3)->get();
        //lấy số view hiện tại của sản phẩm
        $view = $prod->views;
        //truy vấn + thêm 1 view cho sản phẩm khi người dùng bấm vào xem sp
        Product::where('slug',$slug)->update([
        'views' => $view + 1,
        ]);
        return view('home.pro_detail',compact('category','prod','comment','related_pro'));
       }else{
        return view('home.404');
       }
    }



    public function home_search(Request $request){
        $search = $request->get('search');
        $count_pro = Product::where('name','like','%'.$search.'%')->get();
        $product = Product::where('name','like','%'.$search.'%')->paginate(3);
        
        return view('home.search_pro',compact('product','count_pro'));
    }

    public function my_order(){

      // $data = Crypt::decrypt($id);
      $id = Auth::guard('cus')->user()->id;
      // dd(Auth::guard('cus')->user()->id);

      $my_or = Order::where('customer_id',$id)->orderBy('created_at','desc')->paginate(5);

      if($my_or){
         return view('home.my_order',compact('my_or'));
       }else{
        return view('home.404');
       }

     
    }

    public function home_or_detail($id){


      //xử lý ajax

      // $order_id = $request->order_id;
      // $data = Order::where('id',$order_id)->get();

      // // $output = '<h1>'.$data->name.'</h1>';
      // return response()->json(['dulieu' => $data]);


      $ord = Order::find($id);

      if($ord){
        // dd($ord->name);
        $or_de = OrderDetail::where(['order_id'=> $id])->get();
        // dd($or_de);
        return view('home.my_order_detail',compact('ord','or_de'));
      }else{
        return view('home.404');
      }
        
    }

    public function del_order($id){
      $data = Order::find($id);

      if($data){
        $data->update([
        'status' => 2,
        ]);
        // dd($data->customer_id);

        return redirect()->route('my_order',['id'=>$data->customer_id]);
      }
      
    }

    
    
    public function comment(Request $request,$slug){
      $comment = Comment::create([
        'name' => $request->name,
        'email' => $request->email,
        'content' => $request->content,
        'com_slug' => $slug,
      ]);
      // dd($request->all());
      return redirect()->back();

      // echo $slug;
    }

    public function shop_page_left(){

      $category = Category::all();
      $product = Product::where('status',1)->orderBy('id','DESC')->paginate(6);
      // dd($category);

      return view('home.shop_page_left',compact('category','product'));
    }

    public function contact(){
        return view('home.contact');

    }

    
    public function post_contact(request $request){
       
      if (Mail::send('email.contact',[
        'name'=> $request->name,
        'content'=> $request->content
      ],function($mail) use($request){
        $mail->to('quocanh2298@gmail.com');
        $mail->from($request->email,$request->name);
        $mail->subject($request->subject);
      })) {
        return redirect()->route('home_contact')->with('success','Bạn gửi liên hệ thành công!! Cảm ơn bạn!');
      }else{
        return redirect()->route('home_contact')->with('success','Bạn gửi liên hệ không thành công!! Vui lòng Thử lại! Cảm ơn bạn');
      }
    }

    public function test_mail(){
      $data = [
        'name' => 'QuocAnh',
        'pass' => '!@#!@#!$!@$!@#!@#***'

      ];
      Mail::send('testmail',$data,function($mess){
        $mess->from('ph2002bkap@gmail.com','HnaCouQ');
        $mess->to('quocanh2298@gmail.com','php');
        $mess->subject('Thư test gửi mail');
      });
    }

    public function update_profile(){
      $data = Customer::find(Auth::guard('cus')->user()->id);
        if($data){
            $update = $data->update($req->all());

            return response()->json($update);
        }else{
            return ['message' => 'Lỗi'];
        }
    }



    

}
