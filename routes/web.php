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

Route::get('/', 'PagesController@index');

// Route::get('/hello', function () {
//     // return view('welcome');
//     return('Hello World');
// });

Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

//handle request to users
// Route::get('/users/{id}/{name}',function($id,$name){
//     return 'This is user'.$name.'with an id'.$id;

// });





