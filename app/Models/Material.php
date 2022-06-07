<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table ='materials';
    protected $guarded = [];
    public $timestamps = true;

//    public function scopeActive($q) {
//        return $q->where()
//    }
}
