<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('articulos','App\Http\Controllers\ArticuloController',);
Route::resource('ingresos','App\Http\Controllers\IngresoController');
Route::resource('egresos','App\Http\Controllers\EgresoController');
Route::resource('creditos','App\Http\Controllers\CreditoController');
Route::resource('debitos','App\Http\Controllers\DebitoController');
Route::resource('inventarios','App\Http\Controllers\InventarioController');
Route::resource('posts','App\Http\Controllers\PostController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[PostController::class,'index']);

Route::get('/create',function(){
return view('create');
});

Route::post('/post',[PostController::class,'store']);
Route::delete('/delete/{id}',[PostController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit']);

Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PostController::class,'deletecover']);

Route::put('/update/{id}',[PostController::class,'update']);
