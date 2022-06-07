<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Material;
use App\Models\Price;
use App\Models\Product;
use App\Models\SubCategory;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class ProductController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $products = Product::latest()->paginate(config('setting.LimitPaginate'));
        return view("dashboard.products.index", compact('products'));
    } // End Index

    public function create()
    {
        $categories = Category::where("status", 1)->get();
        $subcategories = SubCategory::where('status', 1)->get();
        return view("dashboard.products.create", compact('categories', 'subcategories'));
    } // End Create

    public function store(ProductStoreRequest $request)
    {
        //dd($request->all());
        DB::beginTransaction();
        try {
            //$category = Category::select(['id', 'category_code'])->where('id', $request->category)->latest()->limit(1)->get();
            // $productCode = $category->category_code + 1 ;
            $image = array();
            if ($files = $request->images) {
                //dd($files);
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name . '.' . $ext;
                    $uploade_path = 'app-assets/images/products/';
                    $image_url = $uploade_path . $image_full_name;
                    $file->move($uploade_path, $image_full_name);
                    //$image[] = $image_url;
                    $product = Product::insert([
                        'title'              => $request->title,
                        'main_image'              =>  $request->images ? '/' . $image_url : NULL,
                        'dimensions'              => $request->dimensions,
                        'color'              => $request->color,
                        'description'              => $request->description,
                        'materials'         => $request->materials,
                        'price'             => $request->price,
                        'discount'          => $request->discount,
                        'discount_type'     => $request->discount_type,
                        'estimated_delivery'     => $request->estimated_delivery,
                        'price_after_discount'     => $request->price_after_discount,
                        'category_id'       => $request->category_id,
                        'sub_category_id'   => $request->subcategory,
                        'product_type'      => $request->product_type,
                        'status'            => $request->status,
                        'code'              => $request->code,
                        'admin_id'          => auth()->user()->id,
                    ]);
                }
            }
            DB::commit();
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        } // End Try

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } // End Catch
    } // End Store

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories  = Category::where("status", 1)->get();
        $subcategories = SubCategory::where('status', 1)->get();
        return view("dashboard.products.edit", compact('product', 'categories', 'subcategories'));
    } // End Edit

    public function update(ProductUpdateRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);
            if ($file = $request->file('images') ) {
            $image_name = md5(rand(1000, 10000));
            $ext = strtolower($file->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $uploade_path = 'app-assets/images/products/';
            $image_url = $uploade_path . $image_full_name;
          $m =  $file->move($uploade_path, $image_full_name);
            $product->update([
                'title'              => $request->title,
                'main_image'              =>  $request->images ? '/' . $image_url : NULL,
                'dimensions'              => $request->dimensions,
                'color'              => $request->color,
                'description'              => $request->description,
                'materials'         => $request->materials,
                'price'             => $request->price,
                'discount'          => $request->discount,
                'discount_type'     => $request->discount_type,
                'estimated_delivery'     => $request->estimated_delivery,
                'price_after_discount'     => $request->price_after_discount,
                'category_id'       => $request->category_id,
                'sub_category_id'   => $request->subcategory,
                'product_type'      => $request->product_type,
                'status'            => $request->status,
                'code'              => $request->code,
            ]);
        } else {
            $product->update([
                'title'              => $request->title,
                'dimensions'              => $request->dimensions,
                'color'              => $request->color,
                'description'              => $request->description,
                'materials'         => $request->materials,
                'price'             => $request->price,
                'discount'          => $request->discount,
                'discount_type'     => $request->discount_type,
                'estimated_delivery'     => $request->estimated_delivery,
                'price_after_discount'     => $request->price_after_discount,
                'category_id'       => $request->category_id,
                'sub_category_id'   => $request->subcategory,
                'product_type'      => $request->product_type,
                'status'            => $request->status,
                'code'              => $request->code,
            ]);
        }
            DB::commit();
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        } // End Try

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } // End Catch
    } // End Update

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view("dashboard.products.show", compact('product'));
    } // End Show

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $product = Product::findOrFail($id);
            $this->imageDestroy('files', 'products', $product->main_image);
            $product->delete();

            DB::commit();

            toastr()->error(__('global.success_delete'));
            return redirect()->back();
        } // End Try

        catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } // End Try

    }
}
