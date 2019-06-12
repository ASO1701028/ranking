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

//Route::get('/', function () {
//    return view('/home.html');
//});

Route::get('/',function(){
    return view('welcome');
});

Route::get('themapost','InstantRankingController@themapost');
Route::get('themalist','InstantRankingController@themalist');

Route::get('user','InstantRankingController@user');