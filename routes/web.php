<?php
use App\Post ;
use App\User;
use App\Country;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// 	//return "Hieeee larvel";
// 	//return "hai adhi welcome back here";
// });


// Route::get('/about', function () {
//     //return view('welcome');
// 	//return "Hieeee larvel";
// 	return "hai adhi welcome back here";
// });


// Route::get('/post/1000/adhithya',array('as' => 'adhi.route', function () {
//     //return view('welcome');
// 	//return "Hieeee larvel";
// 	$display = route('adhi.route');
// 	return "hai adhi contact here" . $display;
// }));

// Route::get('/posts/{id}', 'PostController@index');

// Route::get('/contact', 'PostController@contact');  

// Route::get('/post/{id}/{name}/{password}', 'PostController@post');


/*
|--------------------------------------------------------------------------
| SQL QUERIES 
  USES: CREATE READ UPDATE DELETE VALUES IN TABLE!
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/insert', function(){
	DB::insert('insert into posts(title, content) values(?, ?)',  ['Php with laravel', 'Laravel is best']);
});

// Route::get('/read', function() {
// 	$results = DB::select('select * from posts where id=?', [1]);

// 	foreach($results as $display){

// 		// return $display->title;
// 		// return $display->content;
// 		// return var_dump($display);
// 		return $results;

// 	}


// });


// Route::get('/update', function() {
// 	$updated = DB::update('update posts set title="Laravel COOL" where id= ?', [1]);
// return $updated;

// });

// Route::get('/delete', function() {
// 	$deleted = DB::delete('delete from posts where id = ?', [1]);

// 	return $deleted;
// });	




/*
|--------------------------------------------------------------------------
| ELOQUENT Read data from table
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

/*
|--------------------------------------------------------------------------
| ELOQUENT Find data from table
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/find', function() {

// 	$display = Post::find(3);
// 	return $display->content;
// 	// foreach ($display as $post) {
// 	//return var_dump($display);


// 	// 	# code...
// 	// }
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT Find data from table with constraint
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/finddata', function() {

// 	$display = Post::where('id',4)->orderBy('id','desc')->take(1)->get();


// 	return $display;
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT Inserting data using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/einsert', function() {
// 	$post = new Post; //creating new values to Post Table
// 	$post->title = "new data via eloquent"; //adding values in it
// 	$post->content = "eloquent is best";
// 	$post->save(); //finally save the table with inserted values
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT Finding data using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/einsert', function() {
// 	$post = Post::find(6); //Finding new values to Post Table
// 	$post->title = "new data via eloquent"; //adding values in it
// 	$post->content = "eloquent is best";
// 	$post->save(); //finally save the table with inserted values
// 	return $post;
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT Creating data with mass assignment using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/large', function() {
// 	Post::create(['title'=>'the create method', 'content'=> 'Yayaaa laravel good']);
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT Updating data using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/update', function() {
// 	Post::where('id', 6)->where('is_admin', 0)->update(['title'=>'Brand new data', 'content'=> 'Michael Jordan']);
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT Deleting data using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/delete', function() {

// 	//simple way to get the id and call the delete() function
// 	//$post = Post::find(3);
// 	//$post->delete();
// 	//by using destroy () function wwe just deleting it all
// 	//Post::destroy([3,4]);
// 	//by turn
// 	// Post::where('id', 3)->delete();
// });



/*
|--------------------------------------------------------------------------
| Deleting data [Soft data delete] using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/soft', function() {
// 	Post::find(8)->delete();

// });

/*
|--------------------------------------------------------------------------
| Deleting data [Thrashing of Data] using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/
// Route::get('/delete', function() {
// 	$post = Post::withTrashed()->where('id', 8)->get();

// 	return $post;
// });


/*
|--------------------------------------------------------------------------
| Deleting data [Restoring the Thrashed Data] using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/
// Route::get('/restore', function() {

// Post::withTrashed()->where('is_admin', 0)->restore();
// });

/*
|--------------------------------------------------------------------------
| Deleting data [Permanently from the Table] using Eloquent
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/fulldelete', function() {

// Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });


/*
|--------------------------------------------------------------------------
|Eloquent Relationships
	[ONE TO ONE RELATIONSHIP]
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/user/{id}/post', function($id) {
// 	return User::find($id)->post;
// });



/*
|--------------------------------------------------------------------------
|Eloquent Relationships
	[INVERSE RELATIONSHIP]
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/post/{id}/user', function($id) {
// 	return Post::find($id)->user->name;

// });

/*
|--------------------------------------------------------------------------
|Eloquent Relationships
	[ONE TO MANY RELATIONSHIP]
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/posts', function(){

	$display = User::find(1);

	foreach($display->posts as $post) {
	echo $post->content . "<br>";
	}


});

/*
|--------------------------------------------------------------------------
|Eloquent Relationships
	[MANY TO MANY RELATIONSHIP]
|--------------------------------------------------------------------------
|
|
|
*/

// Route::get('/user/{id}/role', function($id){

// 	$display = User::find($id)->roles()->orderBy('id', 'desc')->get();

// 	return $display;

// 	// foreach($display->roles as $post) {
// 	// echo $post->name . "<br>";
// 	// }


// });

/*
|--------------------------------------------------------------------------
|QUERYING THE PIVOT TABLE
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/pivot', function() {


	 $user = Country::find(2);
	
	 foreach ($user->count as $display) {
	 	# code...
	 	 return $display;
	 }

 	   // foreach($user->count as $display) {
 	   
 	   // 		 return $display->pivot->id;

 	   // }


// $user = User::find(1);
// return $user;

	// foreach($user->roles as $display) {
	   
	// 	return $display->pivot->user_id;
	// }

	// $count = Country::find($id);
	// return $count;

});

/*
|--------------------------------------------------------------------------
|HASMANY through many relation tables
|--------------------------------------------------------------------------
|
|
|
*/

Route::get('/user/country', function() {

	   	$display = Country::find(2);
	   	foreach ($display->posts as $show) {
	   		# code...
	   		return $show;
	   	}
	 	
});



/*
|--------------------------------------------------------------------------
|Polymorphic
|--------------------------------------------------------------------------
|
|
|
*/
Route::get('/post/photos', function() {
$user = Post:: find(1);

foreach ($user->photos as $display) {
	# code...

	echo $display . "<br>";
}
});




/*
|--------------------------------------------------------------------------
|Polymorphic Many to Many
|--------------------------------------------------------------------------
|
|
|
*/
Route::get('/post/tag', function() {
$user = Post::find(1);

foreach ($user->tags as $display) {
	# code...

	return $display->name;
}
});


Route::get('/tag/post', function() {
$user = Tag::find(2);

foreach ($user->posts as $display) {
	# code...

	return $display->name;
}
});