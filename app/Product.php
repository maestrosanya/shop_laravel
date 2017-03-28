<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function anons(){
        $products = Product::select('id', 'title', 'price', 'big_img')->where('sales_leader', '=', '0')->get();

        return $products;
    }

    public function getProductsCategory($brand, $category){
        $products = $this->select('id', 'title', 'price', 'big_img')->where('brand_alias', $brand)->where('category_alias', $category)->get();

        return $products;
    }

    public function categories(){
        return $this->belongsTo('App\category');
    }
}
