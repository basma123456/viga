<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceStoreRequest;
use App\Http\Requests\PriceUpdateRequest;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $prices = Price::latest()->paginate(config('site.LimitPaginate'));
        return view("dashboard.prices.index", compact('prices'));
    }// End Index

    public function create() {

        return view("dashboard.prices.create");
    }// End Create

    public function store(PriceStoreRequest $request) {
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
        $price = Price::findOrFail($id);
        return view("dashboard.prices.edit", compact('price'));
    }// End Edit

    public function update(PriceUpdateRequest $request ,$id) {
        try {
            $price = Price::findOrFail($id);
            $price->update([
                'name'     => $request->price,
                'status'    => $request->status,
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
            $price = Price::findOrFail($id);
            $price->delete();
            toastr()->error(__('global.success_delete'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Destroy


}
