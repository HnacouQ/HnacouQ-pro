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
    //1 sản phẩm cố thể nằm trong nhiều đơn hàng
    public function or_detail(){
        return $this->hasMany(OrderDetail::class,'product_id','id');
    }
}
