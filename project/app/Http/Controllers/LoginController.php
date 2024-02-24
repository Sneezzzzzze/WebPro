<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $usrname = "manager";
        $password = "manager";
        
        $user = DB::table('user')->where('username', $usrname)->first();
        $password = DB::table('user')->where('password', $password)->first();
        $show = DB::table('user')->select('username', 'password')->get();
        if ($user && $password) {
            return "Login success";
        } else {
            return $show;
        }
        // return DB::table('user')->select('username', 'password')->get();
    }
}
