<?php

namespace App\Http\Controllers\admin;

use App\models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\addReq;
use App\Http\Requests\Category\editReq;
use App\Http\Controllers\Controller;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::orderBy('id','DESC')->paginate(5);
       return view('admin.category.index',compact('data'));
       // dd($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::get();

         return view('admin.category.create',compact('category'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addReq $request)
    {
        $data =  Category::create($request->all());

        if ($data) {
            # code...
            return redirect()->route('category.index')->with('success','Add Product Successfully!!!');
        }else{
            return redirect()->route('category.index')->with('error','Add Product Fail!!!');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

         echo "đâsdasdád";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Category::find($id);
        if($data){  
         return view('admin.category.edit',compact('data'));
        }else{
            return redirect()->route('category.index')->with('error','Not Found Product');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id,editReq $request)
    {
        //
        $request -> offsetUnset('_token');
        $request -> offsetUnset('_method');
        $success = Category::where(['id'=>$id])->update($request->all());
        
        if($success){
            return redirect()->route('category.index')->with('success','Update Product Successfully');
        }else{
            return redirect()->route('category.index')->with('success','Update Product Fail');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $data = Category::find($id);

        $sp = $data->products->count();

        if($sp > 0){
            return redirect()->back()->with('error','Can Not Delete Category had Product!!!');
        }else{
            $data->delete();
            if ($data) {
                # code...
                return redirect()->back()->with('success','Delete Category Successfully!!!');
            }
            else{
                return redirect()->back()->with('success','Delete Category Fail!!!');
            }
        }
        
        
    }


    public function search(Request $request){
        $search = $request->get('search');

        $data = Category::where('name','like','%'.$search.'%')->paginate(5);
        return view('admin.category.index',compact('data'));
        
    }  
}
