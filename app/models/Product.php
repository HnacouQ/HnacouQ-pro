<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['name','image','price','sale_price','content','slug','category_id','status'];

    // 1 product có 1 category => hasOne
    public function cat(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
}
