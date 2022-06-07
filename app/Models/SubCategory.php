<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SubCategory extends Model
{
    protected $table = 'sub_categories';
    protected $guarded = [];
    public $timestamps = true;

    public function adminId() {
        return $this->belongsTo(Admin::class , 'admin_id' ,'id')
            ->select('id', 'name');
    }
    public function category() {
        return $this->belongsTo(Category::class,'category_id')
            ->select('id', 'name')
            ->where('status' , 1);
    }

    public function products() {
        return $this->hasMany(Product::class)
        ->where('status', 1);
    }
}
