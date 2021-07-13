<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::post('/reserva', [ReservesController::class, 'store']);
Route::get('/', [PagesController::class, 'index']);
Route::get('/reserva', [ReservesController::class, 'reserva']);
Route::post('/reserva', [ReservesController::class, 'store']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reserva', [\App\Http\Controllers\ReservesController::class, 'reserva'])->name('reserva');
//Route::put('/reserva','ReservesController@store')-> name('reserva.store');

