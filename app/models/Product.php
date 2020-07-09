<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['name','image','price','sale_price','content','category_id','status'];
}
