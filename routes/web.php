<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\JugueteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProveedorController;
use App\Models\Juguete;
use App\Models\Proveedor;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\RouteCompiler;

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

Route::get('/', HomeController::class)->name('welcome');

Route::get('/juguete', [JugueteController::class, 'index'])->name('juguete.index');

Route::get('/juguete/create', [JugueteController::class,'create'])->name('juguete.create');

Route::post('juguete', [JugueteController::class,'store'])->name('juguete.store');

Route::get('/juguete/{juguete}', [JugueteController::class,'show'])->name('juguete.show');

Route::get('/juguetes/{juguete}/edit', [JugueteController::class,'edit'])->name('juguete.edit');

Route::put('juguete/{juguete}',[JugueteController::class,'update'])->name('juguete.update');

Route::delete('juguete/{juguete}',[JugueteController::class,'destroy'])->name('juguete.destroy');

/* ------------------------------------------- CLientes ------------------------------------------------*/ 
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/cliente/create', [ClienteController::class,'create'])->name('cliente.create');

Route::post('cliente', [ClienteController::class,'store'])->name('cliente.store');

Route::get('/cliente/{cliente}', [ClienteController::class,'show'])->name('cliente.show');

Route::get('/cliente/{cliente}/edit', [ClienteController::class,'edit'])->name('cliente.edit');

Route::put('cliente/{cliente}',[ClienteController::class,'update'])->name('cliente.update');

Route::delete('cliente/{cliente}',[ClienteController::class,'destroy'])->name('cliente.destroy');

/*----------------------------------------------Proovedores-------------------------------------------*/ 

Route::get('/proveedor',[ProveedorController::class,'index'])->name('proveedor.index');

Route::get('proveedor/create',[ProveedorController::class,'create'])->name('proveedor.create');

Route::post('proveedor',[ProveedorController::class,'store'])->name('proveedor.store');

Route::get('/proveedor/{proveedor}',[ProveedorController::class,'show'])->name('proveedor.show');

Route::get('/proveedor/{proveedor}/edit',[ProveedorController::class,'edit'])->name('proveedor.edit');

Route::put('proveedor/{proveedor',[ProveedorController::class,'update'])->name('proveedor.update');

Route::delete('proveedor/{proveedor}',[ProveedorController::class,'destroy'])->name('proveedor.destroy');
