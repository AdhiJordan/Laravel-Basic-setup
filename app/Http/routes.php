<?php
//use App\Post ;
// Route::get('/', function() {
// 	//return view('welcome');
// 	return "hieeee! larvel";
// });



/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
|
|
*/


// Route::get('/read', function() {

// 	$display = Post::all();
// 	foreach ($display as $post) {
// 		return $post->title;


// 		# code...
// 	}



// });

Route::group(['middleware' => ['web']], function() {

});