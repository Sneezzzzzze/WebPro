<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deleteMenuController extends Controller
{
    public function deleteMenu(Request $request)
    {
        return view('management/manager');
        // Check if 'fname' and 'dDelete' parameters are present in the request
        if ($request->has('fname') && $request->has('dDelete')) {
            $name = $request->input('fname');
            $delete = $request->input('dDelete');
            echo $name . $delete;
            
            if ($delete === 'yes') {
                DB::table('Food')
                    ->where('Name', $name)
                    ->delete();
                
                $foods = DB::table('Food')
                    ->select('rowid', 'Name', 'Price', 'Category', 'Image')
                    ->get();
                
                return view('management/manager', ['foods' => $foods], ['category' => 'all'], ['search' => '']);
            } else {
                echo 'delete fail';
            }
        } else {
            echo 'no number';
        }
    }
}
