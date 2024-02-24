<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('authen/login');
});

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('authen/register');
});

Route::get('/menu', function () {
    return view('food_page/food_menu');
});

