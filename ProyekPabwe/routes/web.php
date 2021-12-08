<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::get('dashboard', 'App\Http\Controllers\AuthController@dashboard')->name('dashboard');
Route::get('lostform', 'App\Http\Controllers\AuthController@lostform')->name('lostform');
Route::get('foundform', 'App\Http\Controllers\AuthController@foundform')->name('foundform');
Route::get('history', 'App\Http\Controllers\AuthController@history')->name('history');
Route::get('profil', 'App\Http\Controllers\AuthController@profil')->name('profil');
Route::get('help', 'App\Http\Controllers\AuthController@help')->name('help');
Route::get('allItemLost', 'App\Http\Controllers\AuthController@allItemLost')->name('allItemLost');
Route::get('allItemFound', 'App\Http\Controllers\AuthController@allItemFound')->name('allItemFound');
Route::get('editItemLost', 'App\Http\Controllers\AuthController@editItemLost')->name('editItemLost');
Route::get('editItemFound', 'App\Http\Controllers\AuthController@editItemFound')->name('editItemFound');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
    	/*
    		Route Khusus untuk role admin
    	*/
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
    	/*
    		Route Khusus untuk role editor
    	*/
        Route::resource('editor', AdminController::class);
    });
});