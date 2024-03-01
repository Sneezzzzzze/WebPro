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
        $dbUser =  DB::table('user')
            ->select('username', 'password')
            ->where('username', $user)
            ->first();
        if ($dbUser) {
            if ($pass === $dbUser->password) {
                if ($user === 'manager') {
                    return redirect('/management');
                } else if ($user === 'cashier') {
                    return redirect('/cashier');
                } else {
                    return redirect('/login')->with('error', 'User not found');
                }
            } else {
                return redirect('/login')->with('error', 'Incorrect password');
            }
        }
        else {
            return redirect('/login')->with('error', 'User not found');
        }
    }
}
