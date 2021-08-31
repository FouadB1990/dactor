<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/



Route::get('/',function(){
    return view('admin.dashbord');
});

Route::group(['middleware' => 'guest:admin'], function(){
    Route::get('login' , 'LoginController@getLogin');
});

// Route::get('/dashbord',function(){
//     return view('admin.dashbord');
// });

