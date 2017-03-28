<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CatalogController extends IndexController
{
    public function __construct(){
        $this->template = 'shop.index';
    }


    public function show($br, $id){
        
        $products = $this->getProductsCategory($br, $id);

        if (is_object($products)){
            $this->vars = array_add($this->vars, 'products', $products);
        }


        return $this->renderOutput();
    }

    protected function getProductsCategory($brand, $category) {
        $product = new Product();
        $products = $product->getProductsCategory($brand, $category);
        return $products;
    }

}
