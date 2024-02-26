<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index() {
        return view('management/manager');
    }
    
    public function showMenu(Request $request)
    {
        $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->get();

        // return view('management.manager')->with(compact('foods'));
        return view('management/manager', ['foods' => $foods]);
    }
}
