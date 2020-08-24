<?php

namespace App\Http\Controllers\admin;

use App\models\Category;
use Illuminate\Http\Request;
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
        $category = Category::where('parent_id',0)->get();

         return view('admin.category.create',compact('category'));


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
            'name' => 'required|unique:category,name',
            'slug' => 'required|unique:category,slug',
            
        ],[
            'name.required' => 'Tên danh mục không được để trống!!!',
            'name.unique' => 'danh mục đã tồn tại!!!',
            'slug.required' => 'slug không được để trống!!!',
            'slug.unique' => 'slug đã tồn tại!!!',
        ]);
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

        $data = Category::find($id);
        
        $data->delete();
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

         $data = Category::where('name','like','%'.$search.'%')->paginate(5);
        return view('admin.category.index',compact('data'));
        
    }  
}
