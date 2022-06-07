<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::with('adminId')->latest()->paginate(config('setting.LimitPaginate'));
        return view("dashboard.categories.index", compact('categories'));
    }// End Index

    public function create() {
        return view("dashboard.categories.create");
    }// End Create

    public function store(CategoryStoreRequest $request) {
        DB::beginTransaction();

        if($request->image){
            $image_name = md5(rand(1000,10000));
            $ext = strtolower($request->image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $uploade_path = 'app-assets/images/categories/';
            $image_url = $uploade_path.$image_full_name;
            $request->image->move($uploade_path,$image_full_name);


        }
        try {
            $category = Category::create([
                'name'              => $request->name,
                'image'             => $request->image ? '/'.$image_url : NULL ,
                'slug'              => Str::slug($request->slug),
                'seo_title'         => $request->seo,
                'meta_description'  => $request->meta_desc,
                'category_code'     => $request->code_category,
                'priority'          => $request->priority,
                'status'            => $request->status,
                'has_child'         => $request->has_child,
                'admin_id'          => auth()->user()->id,
            ]);// End Create Category


            DB::commit();
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }//Try And Catch
    }// End Store

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view("dashboard.categories.edit", compact('category'));
    }/// End Edit

    public function update(CategoryUpdateRequest $request,$id) {

        DB::beginTransaction();
        try {
            $category = Category::findOrFail($id);
            $category->update([
                'name'              => $request->name,
                'slug'              => Str::slug($request->slug),
                'seo_title'         => $request->seo,
                'meta_description'  => $request->meta_desc,
                'category_code'     => $request->code_category,
                'priority'          => $request->priority,
                'status'            => $request->status,
            ]);
            DB::commit();
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );
        }

    }// End Update


}
