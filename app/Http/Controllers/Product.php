<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class Product extends Controller
{

    public function list ($category_name)
    {
        $category = Categories::where('name', $category_name)->first();

        if (! $category) {
            return false;
        }

        $products = Products::where('category_id', $category->category_id)->cursor();
        return view('category', [
            'category' => $category->name,
            'products' => $products,
        ]);
    }

    public function show ($brand, $product)
    {
        return view('product', [
            'brand' => $brand, 
            'product' => $product,
        ]);
    }

}
