<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\SubCategoryStoreRequest;
use App\Http\Requests\SubCategoryUpdateRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    use ImageTrait;
    public function index() {
        $sub_categories = SubCategory::with(['adminId', 'category'])->latest()->paginate(1);
//        return $sub_categories;
        return view("dashboard.sub_categories.index", compact('sub_categories'));
    }// End Index

    public function create() {
        $categories = Category::where("status", 1)->latest()->get();
        return view("dashboard.sub_categories.create",compact('categories'));
    }// End Create

    public function store(SubCategoryStoreRequest $request) {
        DB::beginTransaction();
        try {
            $subcategory = SubCategory::create([
                'name' => ['ar' => $request->name_ar , 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'meta_description' => $request->meta_desc,
                'seo_title' => $request->seo,
                'priority' => $request->priority,
                'is_feature' => $request->feature,
                'status' => $request->status,
                'icon_map' => $this->imageStore($request->icon_map, 'files','sub_categories/iconMap'),
                'icon_subcategory' => $this->imageStore($request->icon_category, 'files','sub_categories/iconCategory'),
                'admin_id' => auth()->user()->id,
                'category_id' => $request->category
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

            if($request->hasFile('icon_map')) {
                $iconMap = $this->imageStore($request->icon_map, 'files','sub_categories/iconMap');
                $this->imageDestroy('files','sub_categories/iconMap', $subcategory->icon_map);
            }else {
                $iconMap = $subcategory->icon_map;
            }// End Check For Icon Map Isset Or Not


            if($request->hasFile('icon_category')) {
                $iconCategory = $this->imageStore($request->icon_category, 'files','sub_categories/iconCategory');
                $this->imageDestroy('files','sub_categories/iconCategory', $subcategory->icon_category);
            }else {
                $iconCategory = $subcategory->icon_subcategory;
            }// End Check For Icon Category Isset Or Not

            $subcategory->update([
                'name' => ['ar' => $request->name_ar , 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'meta_description' => $request->meta_desc,
                'seo_title' => $request->seo,
                'priority' => $request->priority,
                'is_feature' => $request->feature,
                'status' => $request->status,
                'icon_map' =>    $iconMap,
                'icon_subcategory' => $iconCategory,
                'category_id'      => $request->category
            ]);
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );
        }

    }// End Update
}
