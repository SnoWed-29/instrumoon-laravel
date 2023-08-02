<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function showBill($prod){
        $product = Product::where('id' ,$prod)->first();
        return view('pages.bill',['product' => $product]);
    }
    
    public function bill(Request $request ,$prod){
        
        $product = Product::where('id' ,$prod)->first();
        if(!$product){
            return view('pages.404');
        }

        if (!$request->has('quantity')) {
            $request->merge(['quantity' => 1]);
        }

        $buyerId = Auth()->user()->id ;
        $productPrice = $product->price;
        $quantity = $request->input('quantity');
        $totalPrice = $quantity*$productPrice;
        Bill::create([
            'quantity'=> $quantity,
            'total_price'=>$totalPrice,
            'product_id'=>$product->id,
            'user_id'=> $buyerId
        ]);
        


        return redirect()->route('home')->with('success', 'Bill added successfully.');
        
    }
}
