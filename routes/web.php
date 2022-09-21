<?php

use App\Http\Controllers\ConferenciaController;
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

Route::get('/', function () {
    return view('welcome');
});

//Conferencias:
Route::get('/conferencias', [ConferenciaController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/arreglos', function () {
    return view('arreglos');
})->middleware(['auth'])->name('arreglos');

require __DIR__.'/auth.php';
