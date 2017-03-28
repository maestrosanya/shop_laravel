<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\category;
use Illuminate\Support\Facades\DB;
//use Transliterator;

class brand extends Model
{
    //
    public function getBrands(){
        return brand::all();
    }

    /**
     * Получить категории брендов
     */
    public function getCategories(){

        $categories = $this->select('id', 'name')->with(['categories'=>function($query){
            $query->select('id', 'brand_id', 'name');
        }])->get();

        return $categories;
    }
    /**
     *  Отношение: много категорий к одному бренду
     */
    public function categories(){
        return $this->hasMany('App\category');
    }
}
