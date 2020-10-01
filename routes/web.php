<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Sementara
Route::get('/kesehatan', function() {
    return view('health.index');
})->name('kesehatan');
Route::get('/kesehatan/dokter', function() {
    return view('health.doctor.index');
})->name('kesehatan.dokter');
Route::get('/forum', function() {
    return view('forum.index');
})->name('forum');