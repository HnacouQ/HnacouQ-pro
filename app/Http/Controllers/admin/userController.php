<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\models\Customer;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $data = User::paginate(5);
            return view('admin.user.index',compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ],[
            'name.required' => 'Tên user không được để trống!!',
            'email.required' => 'Tên email không được để trống!!',
            'email.email' => 'Email không đúng định dạng!! VD: sadad@gmail.com',
            'email.unique' => 'email này đã tồn tại!',
            'password.required' => 'password không được để trống!!'


        ]);
        //
        $add  = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($add) {
            # code...
            return redirect()->route('user.index')->with('success','Add user Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = User::find($id);
        // dd($data->name);
        if($data){
            return view('admin.user.edit',compact('data'));
        }else{
            return redirect()->route('user.index')->with('error','Not Found Data');
        }
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request -> offsetUnset('_token');
         $request -> offsetUnset('_method');
        User::where(['id'=>$id])->update($request->all());
        return redirect()->route('user.index')->with('success','Update Data Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = User::find($id)->delete();
        if ($data) {
            # code...
            return redirect()->back()->with('success','Delete User Successfully!!!');
        }
        else{
            return redirect()->back()->with('success','Delete User Fail!!!');
        }
    }

    //test
    public function test(){
        Customer::create([
            'name' => 'HnacouQ',
            'email' => 'Quocanh@gmail.com',
            'phone' => '0921313931',
            'address' => 'HaNoi',
            'password'=> bcrypt('123456')
          
        ]);

    }
    public function search(Request $request){
        $search = $request->get('search');

        $data = User::where('name','like','%'.$search.'%')->paginate(5);
        return view('admin.user.index',compact('data'));
        
    }  
}
