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

Route::get('/','App\Http\Controllers\Printer\PrinterController@index')->name('index');

/*Route::get('/', function () {
    $printers = PrinterModel::take(5)->get();
    //dd($printers);

    return view('welcome', compact($printers));
});*/

