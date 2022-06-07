<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryStoreRequest;
use App\Http\Requests\SubCategoryUpdateRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index() {
        $sub_categories = SubCategory::with(['adminId', 'category'])->latest()->paginate(config('setting.LimitPaginate'));
        return view("dashboard.sub_categories.index", compact('sub_categories'));
    }// End Index

    public function create() {
        $categories = Category::where(
            [
                ["status", 1], ['has_child', 1]
            ])->latest()->get();
        return view("dashboard.sub_categories.create",compact('categories'));
    }// End Create

    public function store(SubCategoryStoreRequest $request) {
        DB::beginTransaction();
        try {
            $subcategory = SubCategory::create([
                'name'              => $request->name,
                'slug'              => Str::slug($request->slug),
                'meta_description'  => $request->meta_desc,
                'seo_title'         => $request->seo,
                'status'            => $request->status,
                'priority'          => $request->priority,
                'admin_id'          => auth()->user()->id,
                'category_id'       => $request->category
            ]);
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
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::latest()->get();
        return view("dashboard.sub_categories.edit", compact('subcategory','categories'));
    }/// End Edit

    public function update(SubCategoryUpdateRequest $request,$id) {


        try {
            $subcategory = SubCategory::findOrFail($id);
            $subcategory->update([
                'name'              => $request->name,
                'slug'              => Str::slug($request->slug),
                'meta_description'  => $request->meta_desc,
                'seo_title'         => $request->seo,
                'status'            => $request->status,
                'category_id'       => $request->category,
                'priority'          => $request->priority,
            ]);
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );
        }

    }// End Update

    public function subCat($id)
    {
  //dd($request->all());

  $cities = SubCategory::where("category_id",$id)
  ->pluck("name","id");
return json_encode($cities);


    }
}
