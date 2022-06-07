<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    protected $table = 'categories';
    protected $guarded = [];
    public $timestamps = true;


    public function adminId()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id')
            ->select('id', 'name');
    } // End AdminId

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'category_amenity', 'category_id', 'amenity_id');
    } // End Amenities


    public function subcategories()
    {
        return $this->hasMany(Subcategory::class)
            ->where('status', 1);
    }

    public function products()
    {
        return $this->hasMany(Product::class , 'category_id ')
            ->where('status', 1);
    }
}
