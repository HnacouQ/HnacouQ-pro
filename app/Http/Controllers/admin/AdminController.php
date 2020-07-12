<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    //
     public function index()
    {
        return view('admin.index');
    }
    public function logout(){
			Auth::logout();
			return redirect()->route('login');	 	
		}
		
}
