<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = [];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }


    /***********************last**********/
    public function totalOrder()
    {
        return $this->belongsTo(TotalOrder::class , 'total_order_id')->withDefault();
    }


}
