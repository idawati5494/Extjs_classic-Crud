<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Blog extends Model
{
			 // use  SoftDeletes;
			 // protected $dates = ['deleted_at'];

			





    // public $timestamps = false;   //create_at dan update_up tidak ada

    protected $fillable =['title','description'];   //whitelist
     // protected $guerded =[];   //blacklist


}