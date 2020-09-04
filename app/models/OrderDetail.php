<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    
     protected $table = 'order_detail';
     protected $fillable = ['order_id','product_id','quantity','price'];


     public $timestamps = false;


     public function pro(){
    	return $this->hasOne(Product::class,'id','product_id');

    }
     public function order(){
    	return $this->hasOne(Order::class,'id','order_id');
    }
}
