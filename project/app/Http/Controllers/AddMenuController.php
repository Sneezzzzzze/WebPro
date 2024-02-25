<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddMenu extends Controller
{
    public function addMenu(Request $request)
    {
        $menu = $request->input('menu');
        $price = $request->input('price');
        $description = $request->input('description');
        $image = $request->input('image');
        $category = $request->input('category');
        $menu = DB::table('Food')->insert([
            'menu' => $menu,
            'price' => $price,
            'description' => $description,
            'image' => $image,
            'category' => $category
        ]);
        return "Menu added successfully";
    }
}
