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


Route::get('/login', function () {
    return view('authen/login');
});
Route::post('/login', [LoginController::class, 'login']);

Route::get('/management', [MenuController::class, 'index']);
Route::get('/management', [MenuController::class, 'showMenu']);

// Route::post('/management', [MenuController::class, 'deleteMenu'])->name('deleteMenu');


Route::get('/cashier', function () {
    return view('cashier/Tablepage');
});

Route::get('/dashboard', function () {
    return view('management/dashboard');
});

Route::get('/Table-{table}', function (string $table) {
    return view('food_page/food_menu');
})->where('table', 'A(10|[1-9])');

Route::get('/Table-{table}', function (string $table) {
    return view('food_page/food_menu');
})->where('table', 'B(10|[1-9])');



// Route::post('/management', [addMenuController::class, 'addMenu']);

// Route::post('/management/add', [MenuController::class, 'addMenu'])->name('addMenu');
// Route::get('/management/add', [MenuController::class, 'addMenu']);

// Route::post('/management/deleteMenu', [MenuController::class, 'deleteMenu'])->name('deleteMenu');
// Route::get('/management', [MenuController::class, 'categoryMenu']);
