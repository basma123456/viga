<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmenityStoreRequest;
use App\Http\Requests\AmenityUpdateRequest;
use App\Models\Amenity;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmenityController extends Controller
{
    use ImageTrait;
    public function index() {
        $amenities =  Amenity::latest()->paginate(20);
        return view("dashboard.amenities.index",compact('amenities'));
    }// End Index

    public function create() {
        return view("dashboard.amenities.create");
    }// End Create

    public function store(AmenityStoreRequest $request) {
        DB::beginTransaction();
        try {
            $amenity = Amenity::create([
                'name' => ['ar' =>  $request->name_ar , 'en' => $request->name_en],
                'icon'  => $this->imageStore($request->icon,'files','amenities'),
                'status' =>  $request->status,
                'admin_id' => auth()->user()->id,
            ]);
            DB::commit();
            toastr()->success(__("global.success_create"));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Store

    public function edit($id) {
        $amenity = Amenity::findOrFail($id);
        return view("dashboard.amenities.edit",compact('amenity'));
    }// End Edit

    public function update(AmenityUpdateRequest $request, $id) {

        DB::beginTransaction();
        try {
            $amenity = Amenity::findOrFail($id);
            if($request->hasFile('icon')) {
                $icon = $this->imageStore($request->icon,'files','amenities');
                $this->imageDestroy('files','amenities', $amenity->icon);
            }else {
                $icon = $amenity->icon;
            }// End If

            $amenity->update([
                'name' => ['ar' =>  $request->name_ar , 'en' => $request->name_en],
                'icon'  => $icon,
                'status' =>  $request->status,
            ]);

            DB::commit();
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }


}
