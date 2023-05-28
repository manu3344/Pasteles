<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClienteController; 
use App\Http\Controllers\DetalleController; 
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController; 


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
    return view('base');
});

//Calling the Controllers. 
Route::resource('/cliente',ClienteController::class); 
Route::resource('/empleado', EmpleadoController::class);
Route::resource('/venta', VentaController::class);
Route::resource('/categoria',CategoriaController::class); 
Route::resource('/producto',ProductoController::class); 
Route::resource('/detalle',DetalleController::class); 
Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
