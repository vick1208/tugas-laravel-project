<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class,'index']);
Route::get('/register',[DashboardController::class,'register']);
Route::post('/welcome',[DashboardController::class,'store']);

Route::get('/table',fn()=>view('pages.user-table'));
Route::get('/data-tables',fn() => view('pages.data-table'));
