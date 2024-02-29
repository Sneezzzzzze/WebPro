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
            $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->get();
            return view('/management/manager', ['category' => 'all', 'search' => '', 'foods' => $foods]);
            // return view('management/managerMainPage');
        } else if ($user === 'cashier' && $pass === 'cashier'){
            return view('cashier/Tablepage');
        } else {
            return view('authen/login');
            
        }
    }
}
