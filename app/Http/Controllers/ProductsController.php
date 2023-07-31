<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
    public function category($name)
    {
        // Fetch the category from the database based on the name
        $category = Category::where('name', $name)->first();

        if (!$category) {
            return view('pages.404',['name' => $name]);
        }

        // Fetch all products related to the category using the defined relationship
        $products = $category->products;

        return view('pages.category', ['category' => $category, 'products' => $products]);
    }
    public function product($prod){
        $product = Product::where('id' ,$prod)->first();
        return view('pages.product',['product' => $product]);
    }
}
