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

Route::get('/','ViewController@index');
Route::post('/','ViewController@index');
Route::get('/logout',function()
{
	return Redirect::to('/admin-dashboard') ;
});
Auth::routes();
 
 Route::group(['middleware' => 'lock'], function () {
 	//Admin Login Success Routes
    Route::get('/admin-dashboard','HomeController@index')->name('admin.loginDashboard');

    // Add New Post
	Route::get('/add-post','PostController@addpost')->name('add.post');
	Route::post('/add-new-post','PostController@addnewpost')->name('addnew.post');
	Route::get('/add-new-post','PostController@addpost')->name('addnew.post');

	// Show All Post
	Route::get('/show-all-post','PostController@showallpost')->name('showall.post');

	// edit Post and update post
	Route::get('edit-post/{id}','PostController@edit')->name('edit.post');
	Route::post('update-post/{id}','PostController@update')->name('update.post');
	Route::get('update-post/{id}',function()
	{
		return Redirect::to('/show-all-post') ;
	});


	// Publish or Unpublish Post
	Route::get('unpublish-post/{pid}', 'PostController@unpublishpost')->name('unpublish.post');
	Route::get('pubblish-post/{pid}', 'PostController@publishpost')->name('publish.post');

	// delete post
	Route::get('delete-post/{pid}', 'PostController@destroy')->name('delete.post');

	Route::get('/settings', 'HomeController@settings')->name('user.profilesetting');

	//Edit user information
	Route::get('edit-user/{id}', 'HomeController@editUser')->name('edit.user');

	//Delete user information
	Route::get('delete-user/{id}', 'HomeController@deleteUser')->name('delete.user');

	// Ban user  login Auth ROutes 
	Route::get('ban-user/{id}', 'HomeController@banUserLogin')->name('banuser.login');

	// Ban User Active Login Auth
	Route::get('ban-user-active/{id}', 'HomeController@banUserActive')->name('activeuser.login');


 });




// post details view user 
Route::get('details-post-view/{title}','ViewController@detailspostview')->name('details.post');

	
	

// User Profile Settings

// Route::get('/settings?tab=name', 'HomeController@settingsname')->name('settings.name');
	
Route::post('unlock-screen', 'LockScreenController@unlock')->name('unlock.screenuser');
// Lock Screen By User
Route::get('/AwOHc9PSIsIm1hYyI6IjY0YWE4ZDNhNDI0NzFjZTEyZDQ3MWM3O{lockuser}', 'LockScreenController@lock')->name('lock.screenuser');

// Userprofile
Route::get('/{username}', 'ViewController@profile')->name('userprofile');


//Route::get('lock-screen', 'HomeController@index')->name('lock.screenuser');


