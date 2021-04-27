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
//============= Home =============
Route::get('/','FrontController@index');
Route::get('/index','FrontController@index');

//============= Home.Product =============
Route::get('/products','FrontController@products');
Route::get('/face', 'FrontController@face')->name('face');
Route::get('/eye', 'FrontController@eye')->name('eye');
Route::get('/lip', 'FrontController@lip')->name('lip');
Route::get('/order{id}',[
	'uses' => 'FrontController@order',
	'as'   => 'order'
]);
Route::get('/searchPro', 'FrontController@search')->name('searchPro');

//============= Home.About =============
Route::get('/about','FrontController@about');

//============= Home.Contact =============
Route::get('/contact','FrontController@contact');

//============= Home.Gallery =============
Route::get('/gallery','FrontController@gallery');
Route::get('/Gface', 'FrontController@Gface')->name('Gface');
Route::get('/Geye', 'FrontController@Geye')->name('Geye');
Route::get('/Glip', 'FrontController@Glip')->name('Glip');

//============= Admin.Item =============
Route::get('/newItem','ItemController@index');
Route::post('/newItem','ItemController@store');

Route::get('/showItem','ItemController@showItem');

Route::get('/trashedItem','ItemController@trashed');

Route::get('/item/delete/{id}',[
	'uses' => 'ItemController@destroy',
	'as'   => 'item.delete'
]);

Route::get('/item/kill/{id}',[
	'uses' => 'ItemController@kill',
	'as'   => 'item.kill'
]);

Route::get('/item/restpre/{id}',[
	'uses' => 'ItemController@restore',
	'as'   => 'item.restore'
]);

Route::get('/item/edit/{id}',[
	'uses' => 'ItemController@edit',
	'as'   => 'item.edit'
]);

Route::post('/item/update/{id}',[
	'uses' => 'ItemController@update',
	'as'   => 'item.update'
]);

Route::get('/search', 'HomeController@search')->name('search');

//============= Admin.Message =============
Route::post('/newMsg','MessageController@store');

Route::get('/showMsg','MessageController@index');

Route::get('/readMsg','MessageController@trashed');

Route::get('/msg/delete/{id}',[
	'uses' => 'MessageController@destroy',
	'as'   => 'msg.delete'
]);

Route::get('/msg/kill/{id}',[
	'uses' => 'MessageController@kill',
	'as'   => 'msg.kill'
]);

//============= Admin.About =============
Route::get('/info','AboutController@index');

Route::post('/newInfo','AboutController@store');

Route::get('/about/edit/{id}',[
	'uses' => 'AboutController@edit',
	'as'   => 'about.edit'
]);

Route::post('/about/update/{id}',[
	'uses' => 'AboutController@update',
	'as'   => 'about.update'
]);

Route::get('/about/delete/{id}',[
	'uses' => 'AboutController@destroy',
	'as'   => 'about.delete'
]);

//============= Admin.Contact =============
Route::get('/info2','ContactController@index');

Route::post('/newInfo2','ContactController@store');

Route::get('/contact/edit/{id}',[
	'uses' => 'ContactController@edit',
	'as'   => 'contact.edit'
]);

Route::post('/contact/update/{id}',[
	'uses' => 'ContactController@update',
	'as'   => 'contact.update'
]);

Route::get('/contact/delete/{id}',[
	'uses' => 'ContactController@destroy',
	'as'   => 'contact.delete'
]);

//============= Reservation =============
Route::get('/order','OrdersController@index');
Route::post('/order','OrdersController@store');

Route::get('/request/delete/{id}',[
	'uses' => 'OrdersController@delete',
	'as'   => 'request.delete'
]);
Route::get('/request/confirm/{id}',[
	'uses' => 'OrdersController@confirm',
	'as'   => 'request.confirm'
]);

Route::get('/request/complete/{id}',[
	'uses' => 'OrdersController@complete',
	'as'   => 'request.complete'
]);

Route::get('/confirmed','OrdersController@index2');

Route::get('/completed','OrdersController@index3');

Route::get('/addOrder','OrdersController@index4');

//============= Auth =============
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');