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
        if ($category === null) {
            $category = 'all';
        }
        if ($search === null) {
            $search = '';
        }

        if ($search === '') {
            if ($category === 'all') {
                $foods = DB::table('Food')
                    ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                    ->get();
            } else {
                $foods = DB::table('Food')
                    ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                    ->where('Category', $category)
                    ->get();
            }
        } else {
            $foods = DB::table('Food')
                ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                ->where('Name', 'LIKE', '%' . $search . '%')
                ->get();
        }
        return view('management/manager', ['foods' => $foods], ['category' => $category], ['search' => $search]);
    }

    public function deleteMenu(Request $request)
    {
        $fname = $request->input('fname');
        $delete = $request->input('delete');
        return $fname . ' ' . $delete;
        // if ($request->has('delete') && $request->has('fname')){
        //     return 'Delete';
        //     $delete = $request->input('delete');
        //     $fname = $request->input('fname');
        //     if ($delete === 'yes') {
        //         DB::table('Food')
        //             ->where('Name', $fname)
        //             ->delete();
        //         return redirect('/management');
        //     } else {
        //         return 'No delete';
        //     }
        // }
    }

}
