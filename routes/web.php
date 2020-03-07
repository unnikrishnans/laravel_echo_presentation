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
use App\Events\PublishName;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/presentation', function () {
    return view('presentation');
});

Route::group(['prefix' => 'audience'], function () {
	Route::get('/', 'AudienceController@index');
	Route::post('/submit-name', 'AudienceController@submitNameForm');
});