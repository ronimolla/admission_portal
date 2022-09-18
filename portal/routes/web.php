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
    //BBLT program route 
    Route::get('/program/bblt', [ProgramController::class, 'bblt']);
    Route::match(['get', 'post'], '/bblt/store',[ProgramController::class, 'bbltstore']);
    //BBLTJ program route 
    Route::get('/program/bbltj', [ProgramController::class, 'bbltj']);
    Route::match(['get', 'post'], '/bbltj/store',[ProgramController::class, 'bbltjstore']);
    //APL program route 
    Route::get('/program/apl', [ProgramController::class, 'apl']);
    Route::match(['get', 'post'], '/apl/store',[ProgramController::class, 'aplstore']);
    //YLS program route 
    Route::get('/program/yls', [ProgramController::class, 'yls']);
    Route::match(['get', 'post'], '/yls/store',[ProgramController::class, 'ylsstore']);
    //YLS program route 
    Route::get('/program/careerx', [ProgramController::class, 'careerx']);
    Route::match(['get', 'post'], '/careerx/store',[ProgramController::class, 'careerxstore']);
   
});
