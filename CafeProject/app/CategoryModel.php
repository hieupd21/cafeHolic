<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    public function product(){
		return $this->hasMany('App\ProductModel','id_category_in_product','id_category');
	}
}
