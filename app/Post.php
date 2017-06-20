<?php

use App\User;
use App\Post;
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // protected $table = 'posts';
    // protected $primaryKey = "post_id";
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
    'title',
    'content'

    ];


public function user() {
	return $this->belongsTo('App\User');
}




}
