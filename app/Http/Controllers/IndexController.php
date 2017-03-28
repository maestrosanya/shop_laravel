<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends SiteController
{


    public function __construct(){

        $this->template = 'shop.index';

    }

    public function index(){

        /*$brand = new brand();
        $brands = $brand->getCategories();*/

        /*$product = new Product();
        $products = $product->anons();*/

        //$this->vars = array_add($this->vars, 'brands', $brands);

        //$this->vars = array_add($this->vars, 'products', $products);

       // dump($this->vars);  

       // if (file_exists($this->template)){
            //return view('shop.index', ['brands' => $this->brands, 'products' => $products]);
            return $this->renderOutput();
       // }
        //abort(404);
    }

    public function show($br, $id){

        $product = new Product();
        $products = $product->where('category_alias', $id)->where('brand_alias', $br)->get();

        dump($products);

        dump($br, $id);
        return view('shop.index', ['products' => $products]);
    }

}
