<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\TotalOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/***********************last**********/

class OrderController extends Controller
{
    #####################################################################################

    //test
    public function index()
    {
        $orders = TotalOrder::
            with('users')->with('ShippingAddresses')->with('orders.products')->latest()->paginate(20);
        return view('dashboard.orders' , compact('orders'));
    }

    #####################################################################################

    public function deleteOrder($id){
        $totalOrder = TotalOrder::with('orders')->find($id);

        foreach($totalOrder->orders as $order){

            $order->delete();
        }
        $totalOrder->delete();
        return redirect()->back();
    }
    #####################################################################################

}
