<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index-sales');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/salesorder', function () {
    return view('salesorder');
});

Route::get('/form_sales_order', function () {
    return view('form_sales_order');
});

