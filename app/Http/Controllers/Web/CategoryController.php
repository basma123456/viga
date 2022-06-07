<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionOne;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
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
    public function index($id)
    {

        $category = Category::where('id',$id)->with('subcategories.products')->first();
        //dd($category);
        $categories = Category::where('status','=',1)->with('subcategories')->get();
        //dd($categories);

        //dd($products);
        return view('site.categories',compact('categories','category'));
    }
}
