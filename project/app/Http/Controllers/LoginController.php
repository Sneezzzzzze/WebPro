<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('password');

        if ($user === 'manager' && $pass === 'manager') {
            return redirect('/management');
        } else if ($user === 'cashier' && $pass === 'cashier'){
            return redirect('/cashier');
        } else {
            return redirect('/login');
        }
    }
}
