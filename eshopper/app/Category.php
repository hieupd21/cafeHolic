<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $primaryKey = "cate_id";

    // protected $guarded = [];

    protected $fillable = ['cate_name'];

    public function product() {
        return $this->hasMany('App\Product', 'prod_cate', 'cate_id');
    }
}
