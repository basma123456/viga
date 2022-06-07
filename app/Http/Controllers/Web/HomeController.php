<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\SectionOne;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
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
    public function index()
    {
        $sliders = Slider::where('status','=',1)->latest()->get();
        $SectionOne = SectionOne::first();
        $categories = Category::where('status','=',1)->get();
        $newArrival = Product::where('status','=',1)->where('product_type','=','new')->get();
        $SpecialProducts = Product::where('status','=',1)->where('product_type','=','special')->get();
        $Offers = Product::where('status','=',1)->where('product_type','=','hot_offers')->get();
        return view('site.home', compact( 'sliders','SectionOne','categories','newArrival','SpecialProducts','Offers'));
    }




    /*******************************************************************/
    public function search(Request $request)
    {
        if ($request->search != null && $request->search != "") {
            if ($request->ajax()) {

                $q = $request->search;

                $data = Product::with(['category','subCategory'])->orWhereHas('category',function ($query) use ($q) {
                    return $query->where('name', 'LIKE', '%' . $q . '%')
                    ->orWhere('category_code', 'LIKE', '%' . $q . '%');
                    })->orWhereHas('subCategory',function ($query) use ($q) {
                    return $query->where('name', 'LIKE', '%' . $q . '%');
                })
                    ->orWhere('title', 'LIKE', '%' . $q . '%')
                    ->orWhere('materials', 'LIKE', '%' . $q . '%')
                    ->orWhere('dimensions', 'LIKE', '%' . $q . '%')
                    ->orWhere('color', 'LIKE', '%' . $q . '%')
                    ->get();
                /******************************/


                $output = '';
                if (count($data) > 0) {

                    $output .=
                        "<table id='table-live-search' class='table-live-search border border-2 table'>" .

                        "<thead class='border border-2 p-5'>" .
                        "<tr>" .
                        "<th scope='col'>#</th>" .
                        "<th scope='col'>#</th>" .
                        "</tr>" .
                        "</thead>" .

                        "<tbody class='p-5'>";


                    foreach ($data as $row) {

                        $output .= "<tr class='w-100 p-2'>" .
                            "<th class='p-2' scope='row'>" . $row->id . "</th>" .
                            "<td class='p-2'><a href='".url(route('app.product',$row->id))."'>" . $row->title .  "</a></td>" .

                            /********************************/

                            "</tr>";
                    }


                    $output .= "</tbody></table>";


                } else {
                    $output .= 'No Results';
                }

                echo $output;

            }
        }
    }
}
