<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialStoreRequest;
use App\Http\Requests\MaterialUpdateRequest;
use App\Models\Material;


class MaterialController extends Controller
{
    public function index() {
        $materials = Material::latest()->paginate(config('setting.LimitPaginate'));
        return view("dashboard.materials.index", compact('materials'));
    }// End Index

    public function create() {
        return view("dashboard.materials.create");
    }// End Create

    public function store(MaterialStoreRequest $request) {
        try {
            $material = Material::create([
                'name'      => $request->name,
                'status'    => $request->status,
                'admin_id'  =>  auth()->user()->id,
            ]);
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Store

    public function edit($id) {
        $material = Material::findOrFail($id);
        return view("dashboard.materials.edit", compact('material'));
    }// End Edit

    public function update(MaterialUpdateRequest $request,$id) {
        try {
            $material = Material::findOrFail($id);
            $material->update([
                'name'      => $request->name,
                'status'    => $request->status,
            ]);
            toastr()->success(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Update

    public function destroy($id) {
        try {
            $material = Material::findOrFail($id);
            $material->delete();
            toastr()->error(__('global.success_delete'));
            return redirect()->back();
        }
        catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }// End Destroy

}
