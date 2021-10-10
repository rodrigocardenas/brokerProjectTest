<?php

use App\Http\Controllers\PropiedadController;
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

Route::get('/dashboard', [PropiedadController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('propiedades', PropiedadController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
