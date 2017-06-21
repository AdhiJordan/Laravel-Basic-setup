<?php

namespace App;

use App\User;
use App\Country;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //


    public function users() {
    	return $this->belongsToMany('App\User');
    }
}
