<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $primaryKey = "cmt_id";

    // protected $guarded = [];

    protected $fillable = ['cmt_email', 'cmt_name', 'cmt_content', 'cmt_prod'];

    public function product() {
        return $this->belongsTo('App\Product', 'prod_cate', 'cate_id');
    }
}
