<?php

namespace App;
use App\Country;
use App\User;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    
	public function posts () {
		return $this->hasManyThrough('App\Post', 'App\User');
	}

}
