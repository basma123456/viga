<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TotalOrder;
use Illuminate\Http\Request;
use App\Models\ShippingAddress;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    #####################################################################################

    public function index($id)
    {

        /*test*/
        if(is_numeric($id)) {
            $product = Product::where('id', $id)->first();
            $categories = Category::where('status', '=', 1)->with('subcategories')->get();
            $relatedProduct = SubCategory::where('id', $product->sub_category_id)->with('products')->first();
            return view('site.product', compact('categories', 'product', 'relatedProduct' , 'id'));

            /*****************test********************/
        }elseif($id === 'offers'){
            $relatedProduct = Product::where('discount'  ,'>', 0 )->orderBy('price_after_discount')->latest()->paginate(3);
            return view('site.product', compact( 'relatedProduct' , 'id'));
        }
        /*****************test********************/
        /*test*/


    }
    #####################################################################################

    public function cart()

    {

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('site.cart1')
            ->with('cart_data',$cart_data)
        ;
    }
    #####################################################################################

    public function cartAddress()

    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        $ShippingAddress = ShippingAddress::where('user_id',auth()->user()->id)->get();
        return view('site.cartAddress',compact('ShippingAddress','cart_data'));
    }


    #####################################################################################

    /***********************last**********/
    public function submitOrder(Request $request) {


        $myUser = auth()->user();
        /******getting the last character of the url*******/
        $url = url()->previous();
        $pos = strrpos($url, '=');
        $num = $pos === false || substr($url, $pos + 1) == ''
                                || substr($url, $pos + 1) === '0'
                                || substr($url, $pos + 1) == null ? false : substr($url, $pos + 1);
        /******end getting the last character of the url*******/



        /*********assigning address that clinet has choosen******/ //test
        if( $num !== false && $num !== '0' && is_numeric($num) ){

            $address = ShippingAddress::find($num);
//            $totalOrderAddress = $address->country . ' ' .   $address->city . ' ' . $address->street_name . $address->building_name . ' ' . $address->landmark . ' ' . $address->delivery_instructions . ' phone:  ' . $address->phone_number;
            $totalOrderAddress =  $address->id;
        }else{

//            $totalOrderAddress = $myUser->country . ' ' . $myUser->city . ' ' . $myUser->street_name . ' ' . $myUser->building_name . ' ' . $myUser->landmark . ' ' . $myUser->delivery_instructions;
            $totalOrderAddress =  null;

        }
        /*******end assigning address that clinet has choosen*********/


        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        $total_price = []; //sum of total price that will be entered in  total orders table
        if(Cookie::get('shopping_cart')) {
       $total="0";
            $totalOrder = new TotalOrder();
            $totalOrder->user_id = $myUser->id;
            $totalOrder->save();

            foreach ($cart_data as $data) {
                  $total =  number_format($data['item_quantity'] * $data['item_price'], 2);
                  $order  = new Order();
                  $order->user_id = $myUser->id;
                  $order->product_id = $data['item_id'];
                  $order->quantity = $data['item_quantity'];
                  $order->total = $total;
                  $order->status = 0;
                  $order->total_order_id = $totalOrder->id;
                  $order->totalOrder()->associate($totalOrder);
                  $order->save();
                  $total_price[] = $total;
            }// foreach ($cart_data as $data)


            $totalOrder->address =   $totalOrderAddress;
            $totalOrder->total = array_sum($total_price);
            $totalOrder->save();
        }//if(Cookie::get('shopping_cart')

        Cookie::queue(Cookie::forget('shopping_cart'));


        return view('site.cart2');
    }


    #####################################################################################

    public function addShippingAddress(Request $request)
    {

        //dd($request->all());


            $ShippingAddress = new ShippingAddress();
            $ShippingAddress->user_id = auth()->user()->id;
            $ShippingAddress->full_name = $request->full_name;
            $ShippingAddress->country = $request->country;
            $ShippingAddress->phone_number = $request->phone_number;
            $ShippingAddress->street_name = $request->street_name;
            $ShippingAddress->building_name = $request->building_name;
            $ShippingAddress->city = $request->city;
            $ShippingAddress->landmark = $request->landmark;
            $ShippingAddress->delivery_instructions = $request->delivery_instructions;
            $ShippingAddress->save();


                return response()->json(['status'=>'Added Shipping Address']);
    }


    #####################################################################################

    public function addtocart(Request $request)
    {

        //dd($request->all());

        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        //dd($quantity);

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    //$minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data,2147483647));
                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart','status2'=>'2']);
                }
            }
        }
        else
        {
            $products = Product::find($prod_id);

            $prod_name = $products->title;
            $prod_image = $products->main_image;
//            $priceval = $products->price; //here

            $priceval = $products->price_after_discount;

            if($products)
            {
                $item_array = array(
                    'item_id' => $prod_id,
                    'item_name' => $prod_name,
                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
               // $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data , 2147483647));
                return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
            }
        }
    }

    #####################################################################################

    public function cartloadbyajax()
    {
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);

            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
        else
        {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart)); die;
            return;
        }
    }

    #####################################################################################

    public function updatetocart(Request $request)
    {
        //dd($request->all());
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $item_id_list = array_column($cart_data, 'item_id');
            $prod_id_is_there = $prod_id;

            if(in_array($prod_id_is_there, $item_id_list))
            {
                foreach($cart_data as $keys => $values)
                {
                    if($cart_data[$keys]["item_id"] == $prod_id)
                    {
                        $cart_data[$keys]["item_quantity"] =  $quantity;
                        $item_data = json_encode($cart_data);

                        Cookie::queue(Cookie::make('shopping_cart', $item_data, 2147483647));
                        return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Quantity Updated']);
                    }
                }
            }
        }
    }

    #####################################################################################


    public function deletefromcart(Request $request)
    {
        $prod_id = $request->input('product_id');

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);

                    Cookie::queue(Cookie::make('shopping_cart', $item_data, 2147483647));
                    return response()->json(['status'=>'Item Removed from Cart']);
                }
            }
        }
    }

    #####################################################################################


    public function clearcart()
    {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status'=>'Your Cart is Cleared']);
    }


}
