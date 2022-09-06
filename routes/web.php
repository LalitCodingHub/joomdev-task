<?php

use App\Http\Controllers\EmailtemplateController;
use App\Http\Controllers\UserController;
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
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'registeruser'])->name('user.register');


Route::get('/',[UserController::class,'index']);
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/generate-template',[EmailtemplateController::class,'index']);
Route::post('/generate-template',[EmailtemplateController::class,'store'])->name('user.createTemplate');
Route::get('/templates',[EmailtemplateController::class,'showall']);

