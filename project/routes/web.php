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



Route::any('/staff', function () {
    return view('staff/Tablepage');
});

Route::get('/dashboard', function () {
    return view('management/dashboard');
});

Route::get('/Table/{table}', function (string $table) {
    return view('food_page.food_menu');
})->where('table', 'A(10|[1-9])|B(10|[1-9])');


Route::get('/Table/status', function () {
    return view('food_page.status');
});

Route::get('/chef', function () {
    return view('chef.orderView');
});


Route::get('/history', function () {
    return view('food_page.history');
});

Route::get('/food-available-manager', function () {
    return view('management.openAndCloseManage');
});

Route::any('/food-available-chef', function () {
    return view('chef.openAndCloseChef');
});

Route::any('/', function () {
    return view('food_page.welcome');
});