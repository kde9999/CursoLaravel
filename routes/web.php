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
    //return view('users.index');
  //  return redirect()->route('users.index');
  return view('auth.login');
});



Route::group(['prefix'=>'admin'],function(){


          Route::resource('users','UsersController');


          Route::get('users/{id}/destroy', ['uses' =>'UsersController@destroy',
          'as'=>'admin.users.destroy'
          ]);


          Route::get('users/{user}/edit', ['uses' =>'UsersController@edit',
          'as'=>'admin.users.edit'
          ]);


          Route::get('categories/{id}/destroy',
                  ['uses' =>'CategoriesController@destroy',
                    'as'=>'admin.categories.destroy'
          ]);


         Route::get('categories/{category}/edit',
                      ['uses' =>'CategoriesController@edit',
                      'as'=>'admin.categories.edit'
         ]);


         Route::resource('categories', 'CategoriesController');


// Route::PUT('users/{id}', ['uses' =>'UsersController@update',
// 'as'=>'admin.users.update'
// ]);
 });

Auth::routes();

Route::get('/home', 'HomeController@index');
