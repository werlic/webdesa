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
Route::get('/contact', 'HomeController@contact')->name('contact');

Auth::routes(['register' => false, 'confirm' => false]);
Route::group(['prefix' => '/admins'], function() {
    Route::get('/', 'AdminController@index')->name('dashboard');
});