<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PageController;

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
    return view('lostandfound/login');
});

Route::get('/dashboard', function () {
    return view('lostandfound/index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('lostandfound/index', [PageController::class, 'viewIndex']);
Route::get('lostandfound/allItemFound', [PageController::class, 'viewAllItemFound']);
Route::get('lostandfound/allItemLost', [PageController::class, 'viewAllItemLost']);
Route::get('lostandfound/editProfil', [PageController::class, 'viewEditProfil']);
Route::get('lostandfound/forgot-password', [PageController::class, 'viewForgotPass']);
Route::get('lostandfound/foundform', [PageController::class, 'viewFoundForm']);
Route::get('lostandfound/about', [PageController::class, 'viewAbout']);
Route::get('lostandfound/history', [PageController::class, 'viewHistory']);
Route::get('lostandfound/lostform', [PageController::class, 'viewLostForm']);
Route::get('lostandfound/profil', [PageController::class, 'viewProfil']);
Route::get('lostandfound/register', [PageController::class, 'viewRegister']);
Route::get('lostandfound/editItemLost', [PageController::class, 'viewEditItemLost']);
Route::get('lostandfound/editItemFound', [PageController::class, 'viewEditItemFound']);

Route::post('lostandfound/registerproses', [UsersController::class, 'store']);