<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('username');
        $password = $request->input('password');

        $user = DB::table('user')->where('username', $email)->first();
        $password = DB::table('user')->where('password', $password)->first();
        
        if ($user && $password) {
            return "Login success";
        } else {
            return "Login failed";
        }
    }
}
