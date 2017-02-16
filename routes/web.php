<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix'=>'admin'],function(){
  Route::resource('users','UsersController');
  Route::get('users/{id}/destroy', ['uses' =>'UsersController@destroy',
  'as'=>'admin.users.destroy'
]);



 Route::get('users/{user}/edit', ['uses' =>'UsersController@edit',
 'as'=>'admin.users.edit'
 ]);


// Route::PUT('users/{id}', ['uses' =>'UsersController@update',
// 'as'=>'admin.users.update'
// ]);
 });
