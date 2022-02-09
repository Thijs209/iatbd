<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($name = "klaas")
    {   
        $user = User::where('name', '=', $name)->first();
        
        $product = $user->myProducts->first();
        
        return view('welcome', ['user' => $user, 'product' => $product]);
    }

    public function products($name){
        $products = User::where("name", "=", $name)->first()->myProducts;
        return view('products', ['products' => $products]);
    }
}
