<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('home')->with([
            'guitars' => Product::all()->where('category_id', 1),
            'percussions' => Product::all()->where('category_id', 2),
            'pianos' => Product::all()->where('category_id', 3),
            'studios' => Product::all()->where('category_id', 4),
            'accessoires' => Product::all()->where('category_id', 5),
        ]);
    }
    public function guitars(){
        
    }
}
