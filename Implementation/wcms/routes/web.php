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

Route::get('/', function () {
    return view('woodcraft/index');
});

Auth::routes();

// Route::get('/main', 'Wcmscontroller@index');
// Route::post('/main/checklogin', 'Wcmscontroller@checklogin');
// Route::get('main/successlogin', 'Wcmscontroller@successlogin');
// Route::get('main/logout', 'Wcmscontroller@logout');
// Route::get('wcms/index2', 'Wcmscontroller@index2');

Route::get('wcms','Wcmscontroller@index');
Route::get('wcms/index2','Wcmscontroller@index2');
Route::get('/popupinfo','Wcmscontroller@popup');
Route::get('wcms/login','Wcmscontroller@login');
Route::get('wcms/register','Wcmscontroller@register');
Route::get('wcms/order','Wcmscontroller@order');
Route::get('wcms/orderprocess','Wcmscontroller@orderprocess');
Route::get('wcms/settings','Wcmscontroller@settings');
Route::get('wcms/aboutus','Wcmscontroller@aboutus');
Route::get('wcms/aboutus2','Wcmscontroller@aboutus2');

Route::get('wcms/receipt','Wcmscontroller@receipt');
Route::get('/additems',function(){return view('woodcraft/inventory');
});
Route::get('/additems','ItemController@index');
Route::get('/order2','OrderController@index');
Route::get('/orderlist','OrderController@orderlist')->middleware('auth');
Route::put('/inventory','ItemController@store');
Route::get('/additems/{id}','ItemController@create');
Route::delete('/additems/{id}','ItemController@destroy');

Route::get('/post','ForumController@index')->middleware('auth');
Route::get('/post/{id}','ForumController@create');
Route::put('/forum','ForumController@store');

Route::get('/reply',function(){return view('woodcraft/forum');
});
Route::get('/reply','ForumReplyController@index');
Route::get('/reply/{id}','ForumReplyController@create');
Route::put('/forumreply/{id}','ForumReplyController@store');

Route::get('/editprofile','Settings@index');

Route::put('/updateprofile/{id}','Settings@update');

Route::post('/orderprocess/{id}','OrderController@create')->middleware('auth');
Route::get('/orderprocess/{id}','OrderController@show2');

// Route::get('resource_create','TestController@create');

// Route::get('firstname','TestController@first');

// Route::get('lastname','TestController@last');

// Route::get('fullname','TestController@full');

// Route::get('blog_store', 'TestController@store');

// Route::get('blog_create', 'TestController@create');

// Route::post('blogs', 'TestController@store');

// Route::get('blog_edit', 'TestController@edit');

// Route::get('blog_show', 'TestController@show');

// Route::delete('blog_delete', 'TestController@destroy');



// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
