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
        $category = $request->input('category');
        if ($category === null) {
            $category = 'all';
        }
        
        if ($category === 'all') {
            $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->get();
        } else {
            $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->where('Category', $category)->get();
        }
        return view('management/manager', ['foods' => $foods], ['category' => $category]);
    }

    // public function addMenu(Request $request)
    // {
    //     $name = $request->input('foodname');
    //     $price = $request->input('price');
    //     $category = $request->input('category');
    //     $image = $request->input('photolink');

    //     DB::table('Food')->insert([
    //         'Name' => $name,
    //         'Price' => $price,
    //         'Category' => $category,
    //         'Image' => $image
    //     ]);

    //     return redirect('/management/manager');
    // }

    // public function CategoryMenu(Request $request)
    // {
        
    //     $category = $request->input('category');
    //     $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->where('Category', $category)->get();

    //     return view('management/manager', ['foods' => $foods]);
    // }
}
