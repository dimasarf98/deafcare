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
Route::get('/belanja', function() {
    return view('shopping.index');
})->name('belanja');
Route::get('/belanja/keranjang', function() {
    return view('shopping.cart');
})->name('belanja.keranjang');
Route::get('/informasi', function() {
    return view('information.index');
})->name('informasi');
Route::get('/tespendengaran', function() {
    return view('hearingtest.index');
})->name('tespendengaran');
Route::get('/tespendengaran/show', function() {
    return view('hearingtest.show');
})->name('tespendengaran.show');

Route::middleware('auth')->prefix('deafcare')->name('deafcare.')->group(function ()
{
    Route::prefix('kesehatan')->name('kesehatan.')->group(function()
    {
        Route::resource('jenis', 'JenisKesehatanController', [
            'only' => ['index','show']
        ]);
        Route::resource('tenagaKesehatan', 'TenagaKesehatanController', [
            'only' => ['index','show']
        ]);

    });

    Route::prefix('forum')->name('forum.')->group(function()
    {
        Route::resource('komunitas', 'KomunitasController', [
            'only' => ['index','show']
        ]);
        Route::resource('sekolah', 'SekolahController', [
            'only' => ['index','show']
        ]);
    });

    Route::prefix('informasi')->name('informasi.')->group(function()
    {
        Route::resource('artikel', 'ArtikelController', [
            'only' => ['index','show']
        ]);
    });

    Route::prefix('belanja')->name('belanja.')->group(function()
    {
        Route::resource('item', 'BelanjaController', [
            'only' => ['index','show']
        ]);
        Route::resource('transaksi', 'TransaksiController');
    });

    Route::prefix('tespendengaran')->name('tespendengaran.')->group(function()
    {
        Route::resource('hearingcenter', 'HearingCenterController', [
            'only' => ['index','show']
        ]);

        Route::resource('rumahsakit', 'RumahSakitController', [
            'only' => ['index','show']
        ]);
    });
    
});
