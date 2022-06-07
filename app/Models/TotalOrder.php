<?php
/***********************last**********/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TotalOrder extends Model
{
    protected $table = 'total_order';
    protected $guarded = [];


    public function orders()
    {
        return $this->hasMany(Order::class );
    }

    public function users()
    {
        return $this->belongsTo(User::class , 'user_id');
    }



    //test
    public function ShippingAddresses()
    {
        return $this->belongsTo(ShippingAddress::class , 'address' );
    }

}
/***********************last**********/
