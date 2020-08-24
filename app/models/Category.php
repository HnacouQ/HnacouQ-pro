<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $table = 'category';

     protected $fillable = ['name','status','slug','parent_id'];

    


      // 1 category có n product => hasMany
    public function products(){
    	return $this->hasMany(Product::class,'category_id','id')->orderBy('id','DESC')->limit(5);
    }
}
