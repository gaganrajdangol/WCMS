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



// Route::get('/main', 'Wcmscontroller@index');
// Route::post('/main/checklogin', 'Wcmscontroller@checklogin');
// Route::get('main/successlogin', 'Wcmscontroller@successlogin');
// Route::get('main/logout', 'Wcmscontroller@logout');
// Route::get('wcms/index2', 'Wcmscontroller@index2');

Route::get('wcms','Wcmscontroller@index');
Route::get('wcms/index2','Wcmscontroller@index2');
Route::get('wcms/login','Wcmscontroller@login');
Route::get('wcms/register','Wcmscontroller@register');
Route::get('wcms/order','Wcmscontroller@order');
Route::get('wcms/aboutus','Wcmscontroller@aboutus');
Route::get('wcms/settings','Wcmscontroller@settings');
Route::get('/additems',function(){return view('woodcraft/inventory');
});
Route::get('/additems','ItemController@index');
Route::post('/inventory','ItemController@store');

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
