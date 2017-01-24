<?php

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

// Majas lapas turpinajums caur "/"
// Route::get - CREATE ITEM
// Route::post - READ ITEM
// Route::put - UPDATE ITEM
// Route::delete - DELETE ITEM

/* Route::get('/', 
	function () 
	{
    	return view('welcome'); // function (return)
	}
);
*/

/*
Route::get('/',
	'HomeController@index'); // MCV way (View)
*/

/*
HOME-PAGE
*/

Route::get('/', 
	[
		'uses' => '\App\Http\Controllers\HomeController@index',
		'as' => 'home',

	]
);

/*
ALERT optional
*/

Route::get('/alert', function()
	{
		return redirect()->route('home')->with('info', 'You have signed up!');
	}

); 

/*
SIGN UP
*/

Route::get('/signup', 
	[
		'uses' => '\App\Http\Controllers\AuthController@getSignup',
		'as' => 'signup',
		'middleware' => ['guest'],
	]
);

Route::post('/signup', 
	[
		'uses' => '\App\Http\Controllers\AuthController@postSignup',
	]
);

/*
SIGN IN
*/

Route::get('/signin', 
	[
		'uses' => '\App\Http\Controllers\AuthController@getSignin',
		'as' => 'signin',
		'middleware' => ['guest'],
	]
);

Route::post('/signin', 
	[
		'uses' => '\App\Http\Controllers\AuthController@postSignin',
	]
);

/*
SIGN OUT
*/

Route::get('/signout', 
	[
		'uses' => '\App\Http\Controllers\AuthController@getSignout',
		'as' => 'signout',
	]
);

/*
SEARCH
*/

Route::get('/search', 
	[
		'uses' => '\App\Http\Controllers\SearchController@getResults',
		'as' => 'search.results',
	]
);


/*
PROFILE
*/

Route::get('/user/{username}', 
	[
		'uses' => '\App\Http\Controllers\ProfileController@getProfile',
		'as' => 'profile.index',
	]
);

Route::get('/profile/edit', 
	[
		'uses' => '\App\Http\Controllers\ProfileController@getEdit',
		'as' => 'profile.edit',
		'middleware' => ['auth'],
	]
);

Route::post('/profile/edit', 
	[
		'uses' => '\App\Http\Controllers\ProfileController@postEdit',
		'middleware' => ['auth'],
	]
);

/*
POST
*/

Route::get('/create_post', 
	[
		'uses' => '\App\Http\Controllers\StatusController@index',
		'as' => 'status.index',
		'middleware' => ['auth'],
	]
);

Route::post('/status', 
	[
		'uses' => '\App\Http\Controllers\StatusController@postStatus',
		'as' => 'status.post',
		'middleware' => ['auth'],
	]
);


















































Route::get('users/{id}', function($id)
	{
		$users = App\Users::find($id);
		echo $users->name;
	}
);

Route::get('users_name', function()
	{
		$user = App\Users::where('name', '=', 'Maris')->first();
		echo $user->id;
	}
);

Route::get('orders', function()
	{
		$orders = App\Orders::all();
		foreach($orders as $order)
		{
			//$user = App\Users::find($order->user_id);
			echo $order->item . ' belongs to '. $order->user_id->name . '<br>';
		}
	}
);