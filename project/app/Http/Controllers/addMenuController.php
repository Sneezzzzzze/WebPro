<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addMenuController extends Controller
{
    public function addMenu(Request $request)
    {
        $name = $request->input('foodname');
        $price = $request->input('price');
        $category = $request->input('category');
        $image = $request->input('photolink');

        DB::table('Food')->insert([
            'Name' => $name,
            'Price' => $price,
            'Category' => $category,
            'Image' => $image
        ]);
        $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->get();
        return view('management/manager', ['foods' => $foods], ['category' => 'all'], ['search' => '']);
    }
}
