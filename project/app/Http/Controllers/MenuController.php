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
        $search = $request->input('search');

        $name = $request->input('foodname');
        $price = $request->input('price');
        $category = $request->input('category');
        $image = $request->input('photolink');

        if ($category === null) {
            $category = 'all';
        }
        if ($search === null) {
            $search = '';
        }

        if ($search === '') {
            if ($category === 'all') {
                $foods = DB::table('Food')
                    ->select('Name', 'Price', 'Category', 'Image')
                    ->get();
            } else {
                $foods = DB::table('Food')
                    ->select('Name', 'Price', 'Category', 'Image')
                    ->where('Category', $category)
                    ->get();
            }
        } else {
            $foods = DB::table('Food')
                ->select('Name', 'Price', 'Category', 'Image')
                ->where('Name', 'LIKE', '%' . $search . '%')
                ->get();
        }
        return view('management/manager', ['foods' => $foods], ['category' => $category], ['search' => $search]);
    }

    // public function deleteMenu(Request $request)
    // {
    //     $name = $request->input('foodname');
    //     DB::table('Food')->where('Name', $name)->delete();
    //     return view('management/manager', []);
    // }
    

    // public function CategoryMenu(Request $request)
    // {
        
    //     $category = $request->input('category');
    //     $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->where('Category', $category)->get();

    //     return view('management/manager', ['foods' => $foods]);
    // }
}
