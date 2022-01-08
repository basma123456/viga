<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class City extends Model
{
    use HasTranslations;
    protected $table = 'cities';
    protected $guarded = [];
    public $translatable = ['name'];
    public $timestamps = true;

    public function adminId() {
        return $this->belongsTo(Admin::class , 'admin_id' ,'id')
            ->select('id', 'name');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id', 'id')
            ->select(['id', 'name']);
    }
}
