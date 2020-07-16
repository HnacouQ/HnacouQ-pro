<?php

namespace App\Http\Controllers;
use App\models\Product;
use Illuminate\Http\Request;
use App\models\Banner;

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
}
