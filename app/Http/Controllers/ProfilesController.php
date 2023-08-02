<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index($userid){
        //Auth check
        if (Auth::id() != $userid) {
            return redirect()->route('home'); 
        }

        $user = User::where('id',$userid)->first();
        $bills = Bill::where('user_id', $userid)->get();
        $product = [];
        if ($bills->isEmpty()) {
            // If there are no bills for this user, just return the view with user data
            return view('pages.profile', ['user' => $user, 'bills' => $bills]);
        }
        foreach ($bills as $bill) {
            $product = Product::find($bill->product_id); // Find the product for each bill
            $products[] = $product; // Add the product to the array
        }
        return view('pages.profile',['user' => $user, 'bills' => $bills, 'products' => $products]);
    }
    
}
