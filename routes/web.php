<?php
//Necesario para que detecte el controlador 
use App\Http\Controllers\CompradorController;
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

Route::get('/', function () {
    return view('welcome');
});

//Esta madre crea todas las rutas 
Route::resource('comprador', CompradorController::class);
