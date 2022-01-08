<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Amenity extends Model
{
    use HasTranslations;
    protected $table = 'amenities';
    protected $guarded = [];
    public $translatable = ['name'];
    public $timestamps = true;

    public function adminId() {
        return $this->belongsTo(Admin::class , 'admin_id' ,'id')
            ->select('id', 'name');
    }
}
