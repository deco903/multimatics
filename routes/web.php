<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
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

//Frontend
Route::get('/',[UserController::class,'index']);
Route::get('/about',[UserController::class,'about'])->name('about');
Route::get('/gallery',[UserController::class,'gallery'])->name('gallery');
Route::get('/contact',[UserController::class,'contact'])->name('contact');

Route::get('/dashboard',[DashController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/materi1',[DashController::class,'materi1'])->name('materi1')->middleware('auth');
Route::get('/materi2',[DashController::class,'materi2'])->name('materi2')->middleware('auth');
Route::get('/materi3',[DashController::class,'materi3'])->name('materi3')->middleware('auth');

Route::get('/training1',[DashController::class,'training1'])->name('training1')->middleware('auth');
Route::get('/training2',[DashController::class,'training2'])->name('training2')->middleware('auth');
Route::get('/training3',[DashController::class,'training3'])->name('training3')->middleware('auth');

//Backend
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginproses',[AuthController::class,'loginproses'])->name('loginproses');

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerproses',[AuthController::class,'registerproses'])->name('registerproses');
 
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


