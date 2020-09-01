<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $primaryKey = "prod_id";

    // protected $guarded = [];

    protected $fillable = ['prod_name', 'prod_price', 'prod_image', 'prod_status', 'prod_description', 'prod_featured', 'prod_discount', 'prod_cate'];

    public function category() {
        return $this->belongsTo('App\Category', 'prod_cate', 'cate_id');
    }

    public function comment() {
        return $this->hasMany('App\Comment', 'cmt_prod', 'prod_id');
    }
}
