<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use ImageTrait;
    public function index() {
        $categories = Category::with('adminId')->latest()->paginate(1);
        return view("dashboard.categories.index", compact('categories'));
    }// End Index

    public function create() {

        return view("dashboard.categories.create");
    }// End Create

    public function store(CategoryStoreRequest $request) {
        DB::beginTransaction();
        try {
            $category = Category::create([
                'name' => ['ar' => $request->name_ar , 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'meta_description' => $request->meta_desc,
                'seo_title' => $request->seo,
                'priority' => $request->priority,
                'is_feature' => $request->feature,
                'status' => $request->status,
                'icon_map' => $this->imageStore($request->icon_map, 'files','categories/iconMap'),
                'icon_category' => $this->imageStore($request->icon_category, 'files','categories/iconCategory'),
                'admin_id' => auth()->user()->id,
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
        $category = Category::findOrFail($id);
        return view("dashboard.categories.edit", compact('category'));
    }/// End Edit

    public function update(CategoryUpdateRequest $request,$id) {

        DB::beginTransaction();
        try {
            $category = Category::findOrFail($id);

            if($request->hasFile('icon_map')) {
               $iconMap = $this->imageStore($request->icon_map, 'files','categories/iconMap');
                          $this->imageDestroy('files','categories/iconMap', $category->icon_map);
            }else {
                $iconMap = $category->icon_map;
            }// End Check For Icon Map Isset Or Not


            if($request->hasFile('icon_category')) {
                $iconCategory = $this->imageStore($request->icon_category, 'files','categories/iconCategory');
                                $this->imageDestroy('files','categories/iconCategory', $category->icon_category);
            }else {
                $iconCategory = $category->icon_category;
            }// End Check For Icon Category Isset Or Not

            $category->update([
                'name' => ['ar' => $request->name_ar , 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'meta_description' => $request->meta_desc,
                'seo_title' => $request->seo,
                'priority' => $request->priority,
                'is_feature' => $request->feature,
                'status' => $request->status,
                'icon_map' =>    $iconMap,
                'icon_category' => $iconCategory,
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