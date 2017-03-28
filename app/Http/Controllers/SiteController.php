<?php

namespace App\Http\Controllers;

use App\brand;
use App\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $vars = [];
    protected $template;

    public function renderOutput(){

        $menuCatalog = $this->getMenuBrands();
        $this->vars = array_add($this->vars, 'brands', $menuCatalog);

        $products = $this->getProducts();
        $this->vars = array_add($this->vars, 'products', $products);

        //dump($products);

       // $viewCatalog = view('shop.layouts.left-sidebar', ['brands' => $menuCatalog]);
       // $this->vars = array_add($this->vars, 'menuCatalog', $viewCatalog);


        if ( view()->exists($this->template) ) {
            return view($this->template)->with($this->vars);
        } else {
           // abort(404);
        }

    }

    public function getMenuBrands(){
        $brand = new brand();
        $menuBrands = $brand->getCategories();
        return $menuBrands;
    }

    public function getProducts(){
        $product = new Product();
        $products = $product->anons();
        return $products;
    }

}
