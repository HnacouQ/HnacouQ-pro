<?php

namespace App\Http\Controllers\admin;

use App\models\Product;
use App\models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Product\addReq;
use App\Http\Requests\Product\editReq;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

           $data = Product::orderBy('id','DESC')->paginate(5);
       return view('admin.product.index',compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $cats = Category::orderBy('id','ASC')->get();
         
        return view('admin.product.create',compact('cats'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addReq $request)
    {
        //upload
        if ($request->has('upload')) {
            # code...
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/product'),$img_name);
            $request->merge(['image' =>  $img_name]);
        }
    

        //lưu vào db

         $add = Product::create($request->all());
         if($add){
            return redirect()->route('product.index')->with('success','thêm mới sản phẩm thành công!!!!');
         }
         else{
            return redirect()->back();
         }

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Product::find($id);

        if(is_null($data)){
            return redirect()->route('product.index')->with('success','Dữ liệu này không có trong CSDL');
         // dd($data->image);
        }else{
            return view('admin.product.show',compact('data'));
        }
        
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
         $data = Product::find($id);
          $cats = Category::all();
         return view('admin.product.edit',compact('data','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(editReq $request, $id)
    {
        $data = Product::find($id);
        $request -> offsetUnset('_token');
        $request -> offsetUnset('_method');
         
        // $img_name = $data->image;
        // dd($img_name);
        if ($request->has('upload')) {
            # code...
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/product'),$img_name);
            $request->merge(['image' =>  $img_name]);
        }else{
            $img_name = time().'-'.$request->image;
        }

      

        Product::where(['id'=>$id])->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'image' => $request->image,
        ]);
        return redirect()->route('product.index')->with('success','Dữ liệu Được Sửa Thành Công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $data = Product::find($id)->delete();
        if ($data) {
            # code...
            return redirect()->back()->with('success','Xóa thành Công!!!');
        }
        else{
            return redirect()->back()->with('success','Xóa Thất Bại!!!');
        }
    }
    public function search(Request $request){
        $search = $request->get('search');

         $data = Product::where('name','like','%'.$search.'%')->paginate(5);
        return view('admin.product.index',compact('data'));
        
    }  
}
