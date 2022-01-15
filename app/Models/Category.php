<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;
    protected $table = 'categories';
    protected $guarded = [];
    public $translatable = ['name'];
    public $timestamps = true;

    public function adminId() {
        return $this->belongsTo(Admin::class , 'admin_id' ,'id')
            ->select('id', 'name');
    }

    public function amenities() {
        return $this->belongsToMany(Amenity::class,'category_amenity' , 'category_id', 'amenity_id');
    }

}
