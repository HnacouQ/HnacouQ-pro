<?php

namespace App\Http\Controllers;

use App\models\Category;
use Illuminate\Http\Request;


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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.category.create');

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data =  Category::create($request->all());

        if ($data) {
            # code...
            return redirect()->route('category.index')->with('success','Thêm mới thành Công!!!');
        }else{
            return redirect()->route('category.index')->with('error','Thêm mới thất bại!!!');
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
         return view('admin.category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        //
        $request -> offsetUnset('_token');
        $request -> offsetUnset('_method');
        Category::where(['id'=>$id])->update($request->all());
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $data = Category::find($id)->delete();
        if ($data) {
            # code...
            return redirect()->back()->with('success','Xóa mới thành Công!!!');
        }
        else{
            return redirect()->back()->with('success','Xóa mới Thất Bại!!!');
        }
    }
}
