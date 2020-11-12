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
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('profil', 'Profil\ProfilController@index')->name('profil');
    Route::namespace('Edukasi')->prefix('edukasi')->name('edukasi.')->group(function()
    {
        Route::resource('video', 'VideoController', [
            'only' => ['index','show']
        ]);

        Route::prefix('admin')->name('admin.')->group(function()
        {
            Route::resource('video', 'VideoController');
        });
    });
    Route::namespace('Kesehatan')->prefix('kesehatan')->name('kesehatan.')->group(function()
    {
        Route::prefix('user')->name('user.')->group(function()
        {
            Route::resource('jenis', 'JenisKesehatanController', [
                'only' => ['index','show']
            ]);
            Route::resource('tenagaKesehatan', 'TenagaKesehatanController', [
                'only' => ['index','show']
            ]);
            Route::resource('jadwal', 'JadwalTenagaKesehatanController', [
                'only' => ['index','show']
            ]);
        });

        Route::prefix('admin')->name('admin.')->group(function()
        {
            Route::resource('jenis', 'JenisKesehatanController', [
                'only' => ['create','store', 'edit','update']
            ]);
            Route::resource('tenagaKesehatan', 'TenagaKesehatanController', [
                'only' => ['create','store', 'edit','update','destroy']
            ]);
            Route::resource('jadwal', 'JadwalTenagaKesehatanController', [
                'only' => ['create','store', 'edit','update']
            ]);
        });

        Route::prefix('tenagakesehatan')->name('tenagakesehatan.')->group(function()
        {
            Route::resource('jenis', 'JenisKesehatanController', [
                'only' => ['edit','update']
            ]);
            Route::resource('tenagaKesehatan', 'TenagaKesehatanController', [
                'only' => ['edit','update']
            ]);
            Route::resource('jadwal', 'JadwalTenagaKesehatanController', [
                'only' => ['edit','update']
            ]);
        });

    });

    Route::namespace('Forum')->prefix('forum')->name('forum.')->group(function()
    {
        Route::prefix('user')->name('user.')->group(function()
        {
            Route::resource('komunitas', 'KomunitasController', [
                'only' => ['index','show']
            ]);
            Route::resource('sekolah', 'SekolahController', [
                'only' => ['index','show']
            ]);

            Route::get('komunitas/profil','KomunitasController@profil')->name('komunitas.profil');
            Route::get('komunitas/kegiatan','KomunitasController@kegiatan')->name('komunitas.kegiatan');
        });

        Route::prefix('admin')->name('admin.')->group(function()
        {
            Route::resource('komunitas', 'KomunitasController', [
                'only' => ['create','store', 'edit','update','destroy']
            ]);
            Route::resource('sekolah', 'SekolahController', [
                'only' => ['create','store', 'edit','update','destroy']
            ]);
        });
    });

    Route::namespace('Informasi')->prefix('informasi')->name('informasi.')->group(function()
    {
        Route::resource('artikel', 'ArtikelController');
        Route::get('artikel/getbytag/{tag}','ArtikelController@getByTag')->name('artikel.getbytag');
    });

    Route::namespace('Belanja')->prefix('belanja')->name('belanja.')->group(function()
    {
        Route::prefix('user')->name('user.')->group(function()
        {
            Route::resource('item', 'BelanjaController', [
                'only' => ['index','show']
            ]);
            Route::get('cart', 'BelanjaController@cart')->name('cart');
            Route::resource('transaksi', 'TransaksiController');
        });

        Route::prefix('vendor')->name('vendor.')->group(function()
        {
            Route::resource('item', 'BelanjaController', [
                'only' => ['create','store','edit','update','destroy']
            ]);
        });
    });

    Route::namespace('TesPendengaran')->prefix('tespendengaran')->name('tespendengaran.')->group(function()
    {
        Route::prefix('user')->name('user.')->group(function()
        {
            Route::resource('jenis', 'JenisPendengaranController',[
                'only' => ['index']
            ]);
            Route::resource('jenis.hearingcenter', 'HearingCenterController',[
                'only' => ['index']
            ]);
        });

        Route::prefix('admin')->name('admin.')->group(function()
        {
            Route::resource('jenis.hearingcenter', 'HearingCenterController',[
                'only' => ['create', 'store', 'edit', 'update', 'destroy']
            ]);
        });
    });

});