<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProgramController;
Auth::routes();
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



Route::get('/admin', [AdminController::class, 'admin']);
Route::post('/login', [AdminController::class, 'login']);

Route::group(['middleware' =>['adminlogin']],function(){

    Route::get('/logout',[AdminController::class, 'logout']);
    Route::get('/dashboard', [IndexController::class, 'dashboard']);
    Route::resource('Admins', AdminController::class);
    Route::get('/program', [ProgramController::class, 'bblt']);
    Route::match(['get', 'post'], '/bblt/store',[ProgramController::class, 'bbltstore']);
   
});
