<?php

namespace App\Http\Controllers\admin;

use App\models\Product;
use App\models\Category;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        //validate
        $this->validate($request,[
            'name' => 'required|unique:product,name',
            'slug' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'name.required' => 'tên sản phẩm không được để trống!!',
            'name.unique' => 'tên sản phẩm đã tồn tại!!',
            'slug.required' => 'slug không được để trống!!',
            'content.required' => 'Mô tả không được để trống!!',
            'category_id.required' => 'tên danh mục không được để trống!!',
            'price.required' => 'Giá sản phẩm không được để trống!!',
            'price.numeric' => 'Bạn nhập sai định dạng.',
            'sale_price.required' => 'Giá khuyến mãi không được để trống!!',
            'sale_price.numeric' => 'Bạn nhập sai định dạng.',
            'upload.required' => 'Ảnh Không Được Để Trống!',
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!',

        ]);
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
         // dd($data->image);
        return view('admin.product.show',compact('data'));
      
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
    public function update(Request $request, $id)
    {
        //validate

        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ],[
            'name.required' => 'tên sản phẩm không được để trống!!',
            
            'slug.required' => 'slug không được để trống!!',
          
            'category_id.required' => 'tên danh mục không được để trống!!',
            'price.required' => 'Giá sản phẩm không được để trống!!',
            'price.numeric' => 'Bạn nhập sai định dạng.',
            'sale_price.required' => 'Giá khuyến mãi không được để trống!!',
            'sale_price.numeric' => 'Bạn nhập sai định dạng.',
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!',

        ]);

        $data = Product::find($id);
        $request -> offsetUnset('_token');
        $request -> offsetUnset('_method');
         

        if ($request->has('upload')) {
            # code...
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/product'),$img_name);
            $request->merge(['image' =>  $img_name]);
        }

      

        Product::where(['id'=>$id])->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'status' => $request->status,
            'image' => $request->image
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
}
