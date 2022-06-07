<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];
    public $timestamps = true;


    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }// End Category

    public function subCategory() {
        return $this->belongsTo(subCategory::class,'sub_category_id');
    }// End subCategory
}
