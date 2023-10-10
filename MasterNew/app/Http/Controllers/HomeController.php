<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ItemDetaile;
use App\Models\Product;
use Auth;


class HomeController extends Controller
{
    public function index()
    {
        // $user_id = Auth::user()->id;
        // gender
        $categoriesFemale = Category::where('gender_id', 1)->get();
        $categoriesMale = Category::where('gender_id', 2)->get();


        $newArrival = ItemDetaile::orderBy('created_at', 'desc')->take(10)->get();
        $trendy = ItemDetaile::orderBy('number_of_rente', 'desc')->take(9)->get();
        
       return view('pages.Home', compact('categoriesFemale', 'categoriesMale','newArrival','trendy'));

    }
}


