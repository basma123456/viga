<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionOneUpdateRequest;
use App\Models\SectionOne;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index() {
        $SectionOne = SectionOne::latest()->paginate(config('site.LimitPaginate'));
        return view("dashboard.SectionOne.index", compact('SectionOne'));
    }// End Index

    public function create() {

        return view("dashboard.prices.create");
    }// End Create

    public function store(SectionOneUpdateRequest $request) {
        try {
            $price = Price::create([
                'name'     => $request->price,
                'status'    => $request->status,
            ]);
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );
        }
    }// End Store

    public function edit($id) {
        $SectionOne = SectionOne::findOrFail($id);
        return view("dashboard.SectionOne.edit", compact('SectionOne'));
    }// End Edit

    public function update(SectionOneUpdateRequest $request ,$id) {
        try {
            $price = SectionOne::findOrFail($id);
            $price->update([
                'name'     => $request->name,
                'title'    => $request->title,
                'paragraph'    => $request->paragraph,
                'offer_name'    => $request->offer_name,
            ]);
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Update

    public function destroy($id) {
        try {
            $price = SectionOne::findOrFail($id);
            $price->delete();
            toastr()->error(__('global.success_delete'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Destroy


}
