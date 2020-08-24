<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\models\Banner;
use Illuminate\Http\Request;
use App\models\Category;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = Banner::orderBy('id','DESC')->paginate(5);
        return view('admin.Banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $cats = Banner::orderBy('id','ASC')->get();
        return view('admin.banner.create');
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
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/banner'),$img_name);
            $request->merge(['image' =>  $img_name]);
        }
    

        //lưu vào db

         $add = Banner::create($request->all());
         if($add){
            return redirect()->route('banner.index')->with('success','thêm mới sản phẩm thành công!!!!');
         }
         else{
            return redirect()->back();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Banner::find($id);

        return view('admin.banner.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Banner::find($id);
        $request -> offsetUnset('_token');
        $request -> offsetUnset('_method');
         

        if ($request->has('upload')) {
            # code...
            $img_name = time().'-'.$request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads/banner'),$img_name);
            $request->merge(['image' =>  $img_name]);
        }

      

        Banner::where(['id'=>$id])->update([
            'name' => $request->name,
            'type' => $request->type,
            'image' => $request->image
        ]);
        return redirect()->route('banner.index')->with('success','Dữ liệu Được Sửa Thành Công!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Banner::find($id)->delete();

        return redirect()->back()->with('success','Xóa Thành Công');

    }
    public function search(Request $request){
        $search = $request->get('search');

         $data = Banner::where('name','like','%'.$search.'%')->paginate(5);
        return view('admin.banner.index',compact('data'));
        
    }  
}
