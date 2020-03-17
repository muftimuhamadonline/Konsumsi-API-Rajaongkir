<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/test', 'Test@test');
Route::get('/formcekongkir', 'CekongkirController@index');
Route::get('/getprovince', 'CekongkirController@getProvince');
// Route::post('/city/{prov}', 'CekongkirController@getCity');
Route::get('/getcity/{prov}', 'CekongkirController@getCity');
Route::get('/getcost', 'CekongkirController@getCost');
