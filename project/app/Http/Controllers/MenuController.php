<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index()
    {
        $foods = DB::table('Food')
            ->select('rowid', 'Name', 'Price', 'Category', 'Image')
            ->get();
        return view('management/manager', ['foods' => $foods], ['category' => 'ทั้งหมด'], ['search' => '']);
    }

    public function showMenu(Request $request)
    {
        $category = $request->input('category');
        $search = $request->input('search');
        if ($category === null) {
            $category = 'ทั้งหมด';
        }
        if ($search === null) {
            $search = 'ทั้งหมด';
        }

        if ($search === 'ทั้งหมด' && $category === 'ทั้งหมด') {
            $foods = DB::table('Food')
                ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                ->get();
        } else if ($search === 'ทั้งหมด' && $category !== 'ทั้งหมด') {
            $foods = DB::table('Food')
                ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                ->where('Category', $category)
                ->get();
        } else {
            $foods = DB::table('Food')
                ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                ->where('Name', 'like', '%' .  $search . '%')
                ->get();
        }
        return view('management/manager', ['foods' => $foods], ['search' => $search], ['category' => $category]);
    }

    // public function deleteMenu(Request $request)
    // {
    //     $name = $request->input('fname');
    //     $delete = $request->input('dDelete');

    //     if ($delete === 'yes') {
    //         DB::table('Food')
    //             ->where('Name', $name)
    //             ->delete();
    //         // return redirect('/management');
    //     } else {
    //         // return redirect('/management');
    //     }
    // }
}
