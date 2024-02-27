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

    // public function modifyMenu(Request $request)
    // {
    //     $name = $request->input('foodname');
    //     $price = $request->input('price');
    //     $category = $request->input('category');
    //     $image = $request->input('photolink');
    //     $oldname = $request->input('oldname');
    //     $oldprice = $request->input('oldprice');
    //     $oldcategory = $request->input('oldcategory');
    //     $oldimage = $request->input('oldimage');

    //     if ($name === null) {
    //         $name = $oldname;
    //     }
    //     if ($price === null) {
    //         $price = $oldprice;
    //     }
    //     if ($category === null) {
    //         $category = $oldcategory;
    //     }
    //     if ($image === null) {
    //         $image = $oldimage;
    //     }

    //     DB::table('Food')
    //         ->where('Name', $oldname)
    //         ->where('Price', $oldprice)
    //         ->where('Category', $oldcategory)
    //         ->where('Image', $oldimage)
    //         ->update(['Name' => $name, 'Price' => $price, 'Category' => $category, 'Image' => $image]);

    //     return redirect('/management');
    // }

    public function deleteMenu(Request $request)
    {
        $name = $request->input('foodname');
        $delete = $request->input('yesDelete');

        if ($delete === 'yes') {
            DB::table('Food')
                ->where('Name', $name)
                ->delete();
            return 'delete success';
        } else {
            return 'delete fail';
        }
        $foods = DB::table('Food')->select('Name', 'Price', 'Category', 'Image')->get();
        return view('/management', ['foods' => $foods], ['category' => 'all'], ['search' => '']);
    }
}
