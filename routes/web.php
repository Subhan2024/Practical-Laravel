<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(form ::class)->group(function () {
    Route::get('/form','form');
    Route::post('/form','reg');
    Route::get('/view','view');

    Route::get('/dlt{id}','delete');
    Route::get('/edit{id}','edit');
    Route::post('/edit{id}','update');
});
