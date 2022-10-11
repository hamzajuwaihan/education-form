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
    return view('pages.index');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::get('/user-research', function () {
    return view('pages.user-research');
});

Route::get('/web-development', function () {
    return view('pages.web-development');
});
Route::get('/login', function () {
    return view('pages.login');
});