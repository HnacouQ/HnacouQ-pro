<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
     protected $table = 'banner';
     protected $fillable = ['name','content','img','link','ordering'];
}
