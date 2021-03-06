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

Route::group(['middleware' => 'revalidate'], function () {
    // route not login
    Route::get('/', 'LoginController@index')->name('login');
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login/attempt', 'LoginController@authenticate');
    Route::get('/logout', 'LoginController@logout');

    // route after login
    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
    Route::get('/profil', 'ProfilController@index')->name('profil')->middleware('auth');
    Route::get('/akun-pengguna', 'AkunPenggunaController@index')->name('akun-pengguna')->middleware('auth');
    Route::get('/ubah-password', 'UbahPasswordController@index')->name('ubah-password')->middleware('auth');
    Route::post('/ubah-password/update', 'UbahPasswordController@updatePassword')->name('ubah-password/update')->middleware('auth');
    Route::get('/iku-pertanian', 'PertanianController@iku')->name('iku-pertanian')->middleware('auth');
    Route::get('/data-pendukung-pertanian', 'PertanianController@dataPendukung')->name('data-pendukung-pertanian')->middleware('auth');
    Route::get('/social-media', 'SocialMediaController@index')->name('social-media')->middleware('auth');
    Route::get('/e-commerce', 'EcommerceController@index')->name('e-commerce')->middleware('auth');
    Route::get('/misi-pertama', 'MisiPertamaController@index')->name('misi-pertama')->middleware('auth');
    Route::get('/misi-kedua', 'MisiKeduaController@index')->name('misi-kedua')->middleware('auth');
    Route::get('/misi-ketiga', 'MisiKetigaController@index')->name('misi-ketiga')->middleware('auth');
    Route::get('/misi-keempat', 'MisiKeempatController@index')->name('misi-keempat')->middleware('auth');
    Route::get('/try', 'TryController@index')->name('try')->middleware('auth');
});
