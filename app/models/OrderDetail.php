<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
     protected $table = 'order_detail';
     protected $fillable = ['order_id','product_id','quantity','price'];

     public $timestamps = false;
}
