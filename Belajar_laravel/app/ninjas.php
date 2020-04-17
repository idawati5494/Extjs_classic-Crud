<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ninjas extends Model
{
    protected $table = 'ninjas';
    protected $fillable=['name','belt','special_power'];
}
