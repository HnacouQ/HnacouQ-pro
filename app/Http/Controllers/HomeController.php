<?php

namespace App\Http\Controllers;
use App\models\Product;
use Illuminate\Http\Request;
use App\models\Banner;
use App\models\Customer;
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
       
    	$all = Product::orderBy('id','DESC')->limit(8)->get();
    	$men = Product::where('category_id',1)->get();
    	$women = Product::where('category_id',2)->get();
    	$asso = Product::where('category_id',3)->get();
        $banner = Banner::where('type',1)->get();

    	// dd($banner);
        return view('home.home', compact('all','men','women','asso','banner'));
    }

    public function login(){
        return view('home.login');

    }

     public function post_login(Request $request){

        $this->validate($request,[
          'email' => 'required|email',
          'password' => 'required',
        ],[
          'email.required' => 'Bạn chưa nhập Email',
          'email.email' => 'Email chưa đúng định dạng ....@gmail.com',
          'password.required' => 'Bạn chưa nhập Password',
        ]);
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

    public function post_register(request $request){
      $this->validate($request,[
        'name' => 'required',
        'phone' => 'required|numeric',
        'address' => 'required',
        'email' => 'required|email|unique:customer,email',
        'password' => 'required',
        
      ],[
        'name.required' => 'Không được để trống...',
        'phone.required' => 'Không được để trống...',
        'phone.numeric' => 'số điện thoại sai định dạng',
        'address.required' => 'Không được để trống...',
        'email.required' => 'Không được để trống...',
        'email.email' => 'Email chưa đúng định dạng...@gmail.com',
        'email.unique' => 'email này đã tồn tại..',
        'password.required' => 'Không được để trống...',
      ]);

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

}
