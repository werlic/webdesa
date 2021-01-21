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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/pengajuan-surat', 'HomeController@pengajuanSurat')->name('surat');
Route::get('/pengajuan-surat/success/{id}', 'HomeController@cetak')->name('surat.success');
Route::get('/pengajuan-surat/cetak/{id}', 'HomeController@cetakPengajuan')->name('surat.cetak');
Route::get('/contact', 'HomeController@contact')->name('contact');

Auth::routes(['register' => false, 'confirm' => false]);
Route::group(['prefix' => '/admins'], function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::post('/profile/update', 'AdminController@updateProfile')->name('profile.update');
    Route::get('/changepass', 'AdminController@changePassword')->name('changepassword');
    Route::post('/changepass/store', 'AdminController@storePassword')->name('password.store');
    Route::group(['prefix' => 'pengajuan', 'as' => 'pengajuan'], function () {
        Route::get('/', 'PengajuanController@index')->middleware('auth');
        Route::post('/store', 'PengajuanController@store')->name('.store');
        Route::get('/edit/{id}', 'PengajuanController@edit')->middleware('auth')->name('.edit');
        Route::post('/update/{id}', 'PengajuanController@update')->middleware('auth')->name('.update');
        Route::get('/delete/{id}', 'PengajuanController@destroy')->middleware('auth')->name('.delete');
    });
});