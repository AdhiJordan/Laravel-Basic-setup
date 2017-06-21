<?php
use App\Post;
use App\Country;
use App\Role;
use App\User;
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post() {

        return $this->hasOne('App\Post');
    }

    public function posts() {

        return $this->hasMany('App\Post');

    }

    public function roles() {

        return $this->belongsToMany('App\Role')->withpivot('user_id');
    }

    public function count() {
        return $this->belongsToMany('App\Country');
    }


public function photos() {
    return $this->morphMany('App\Photo', 'imageable');
}
}
