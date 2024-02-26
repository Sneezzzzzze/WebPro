<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;


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

// Route::get('/', function () {
//     return view('test');
// });

Route::match(['get', 'post'], '/login', [LoginController::class, 'login']);

Route::get('/management', [MenuController::class, 'index'])->name('management.index');
Route::get('/management', [MenuController::class, 'showMenu']);
// Route::get('/management', [MenuController::class, 'categoryMenu']);

// Route::post('/management', [MenuController::class, 'addMenu']);
