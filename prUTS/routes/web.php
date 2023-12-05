<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UTSController;
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

Route::get('/uts/submit', [UTSController::class, 'index'])->name('uts.submit');
Route::get('/uts', ([UTSController::class, 'create']));
Route::post('/uts', ([UTSController::class, 'index']));
Route::get('/uts/{id}', ([UTSController::class, 'show']));
Route::get('/uts/{id}/edit', ([UTSController::class, 'edit']));
Route::put('/uts/{id}/edit', ([UTSController::class, 'update']));
Route::delete('/uts/{id}', ([UTSController::class, 'destroy']));