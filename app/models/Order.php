<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
     protected $table = 'orders';
     protected $fillable = ['name','email','phone','address','order_note','payment_method','customer_id'];
}
