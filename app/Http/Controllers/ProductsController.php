<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;
use App\Product;
use App\category;

class ProductsController extends Controller
{
    //
    public function show($br, $id){

        $product = new Product();
        $products = $product->where('category_alias', $id)->where('brand_alias', $br)->get();

        dump($products);

        dump($br, $id);
        return view('shop.index', ['products' => $products]);
    }
}
