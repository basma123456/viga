<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SubCategory extends Model
{
    use HasTranslations;
    protected $table = 'sub_categories';
    protected $guarded = [];
    public $translatable = ['name'];
    public $timestamps = true;

    public function adminId() {
        return $this->belongsTo(Admin::class , 'admin_id' ,'id')
            ->select('id', 'name');
    }
    public function category() {
        return $this->belongsTo(Category::class,'category_id', 'id')
            ->select('id', 'name');
    }
}
