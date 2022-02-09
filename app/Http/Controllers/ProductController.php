<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){
        return \App\Models\Product::find($id);
    }

    public function owner($id){
        return \App\Models\Product::find($id)->myUser;
    }
}
