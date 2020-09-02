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


//*Route::get('/blog', function () {
    //return ('Blog');
//});

//Route::get('/users/{id}', function ($id, $name) {
  //  return 'this is user'.$name.' with an id of ' .$id;
//});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/create', 'PostsController@create');

Route::resource('posts', 'PostsController');

Route::any('{slug}', function(){
  return view ('welcome');
});




