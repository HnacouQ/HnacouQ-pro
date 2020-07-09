<?php

namespace App\Http\Controllers;

use App\models\Product;
use App\models\Category;
use Illuminate\Http\Request;

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
          $cats = Category::orderBy('name','ASC')->get();
         
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

        //upload
        if ($request->has('upload')) {
            # code...
            $img_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'),$img_name);
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
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
