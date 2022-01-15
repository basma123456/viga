<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryStoreRequest;
use App\Http\Requests\CountryUpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    public function index() {

        $countries = Country::latest()->paginate(20);
        return view("dashboard.countries.index", compact('countries'));
    }// End Index
    public function create() {
        return view("dashboard.countries.create");
    }// End Create

    public function store(CountryStoreRequest $request) {
        try {
            $country =  Country::create([
                'name' => ['ar' => $request->name_ar , 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'admin_id' => auth()->user()->id,
                'status' =>  $request->status
            ]);
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Store

    public function edit($id) {
        $country =  Country::findOrFail($id);
        return view('dashboard.countries.edit', compact('country'));
    }// End Edit

    public function update(CountryUpdateRequest $request,$id) {
        try {
            $country = Country::findOrFail($id);
            $country->update([
                'name' => ['ar' => $request->name_ar , 'en' => $request->name_en],
                'slug' => Str::slug($request->slug),
                'status' =>  $request->status
            ]);
            toastr()->success(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }
}
