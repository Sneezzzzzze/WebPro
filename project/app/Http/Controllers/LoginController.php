<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('password');

        // not done yet $user is not defined
        if ($pass === "manager" && $user === "manager"){
            Route::get('/management', [MenuController::class, 'index'])->name('management.index');
            Route::get('/management', [MenuController::class, 'showMenu']);
            return redirect('/management');
        } else {
            return 'Login failed!';
        }
    }
}
