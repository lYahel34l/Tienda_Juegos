<?php


use App\Http\Controllers\JugueteController;
use App\Http\Controllers\HomeController;

use App\Models\Juguete;
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

Route::get('/', HomeController::class);

Route::get('a', function(){
    return "hola2";
});


Route::get('/juguete', [JugueteController::class, 'index'])->name('juguete.index');

Route::get('/juguete/create', [JugueteController::class,'create'])->name('juguete.create');

Route::get('/juguete/{id}', [JugueteController::class,'show'])->name('juguete.show');



