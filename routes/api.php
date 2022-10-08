<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\Users\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('country', 'App\Http\Controllers\Country\CountryController@country');

Route::get('country/{id}', 'App\Http\Controllers\Country\CountryController@countryById');

Route::post('country', 'App\Http\Controllers\Country\CountryController@countrySave');

Route::put('country/{id}', 'App\Http\Controllers\Country\CountryController@countryEdit');

Route::delete('country/{id}', 'App\Http\Controllers\Country\CountryController@countryDelete');

Route::get('users', 'App\Http\Controllers\Users\UsersController@users');

Route::get('users/{id}', 'App\Http\Controllers\Users\UsersController@usersById');

Route::post('user', 'App\Http\Controllers\Users\UsersController@userSave');

Route::get('tors', 'App\Http\Controllers\Tors\TorsController@tors');

Route::patch('tors/{id}', 'App\Http\Controllers\Tors\TorsController@kabinetEdit');






