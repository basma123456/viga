<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityStoreRequest;
use App\Http\Requests\CityUpdateRequest;
use App\Models\City;
use App\Models\Country;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CityController extends Controller
{
    use ImageTrait;

    public function index() {
        $cities = City::with(['adminId','country'])->latest()->paginate(20);
        return view("dashboard.cities.index", compact('cities'));
    }// End Index

    public function create() {
        $countries = Country::where("status", 1)->get();
        return view("dashboard.cities.create", compact('countries'));
    }// End Create

    public function store(CityStoreRequest $request) {
        DB::beginTransaction();
        try {
            $city = City::create([
                'name'              => ['ar' => $request->name_ar , 'en' =>  $request->name_en],
                'seo_title'         => $request->seo,
                'meta_description'  => $request->meta_desc,
                'status'            => $request->status,
                'country_id'        =>  $request->country,
                'admin_id'          => auth()->user()->id,
                'latitude'          => $request->latitude,
                'longitude'         => $request->longitude,
                'slug'              => Str::slug($request->slug),
                'thumbnail_image'   => $this->imageStore($request->thumbnail,'files','cities/thumbnail'),
                'banner_image'      => $this->imageStore($request->banner,'files','cities/banner'),
            ]);
            DB::commit();
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }// End Try Catch
    }// End Store

    public function edit($id) {
        $city = City::findOrFail($id);
        $countries = Country::get();
        return view("dashboard.cities.edit" ,compact('city', 'countries'));
    }// End Edit

    public function update(Request $request,$id) {

        DB::beginTransaction();
        try {
            $city = City::findOrFail($id);
            if($request->hasFile('thumbnail')) {
                $thumbnail = $this->imageStore($request->thumbnail,'files','cities/thumbnail');
                $this->imageDestroy('files','cities/thumbnail',$city->thumbnail_image);
            }else {
                $thumbnail = $city->thumbnail_image;
            }// End If

            if($request->hasFile('banner')) {
                $banner = $this->imageStore($request->banner,'files','cities/banner');
                $this->imageDestroy('files','cities/banner',$city->banner_image);
            }else {
                $banner = $city->banner_image;
            }// End If

            $city->update([
                'name'              => ['ar' => $request->name_ar , 'en' =>  $request->name_en],
                'seo_title'         => $request->seo,
                'meta_description'  => $request->meta_desc,
                'status'            => $request->status,
                'country_id'        =>  $request->country,
                'latitude'          => $request->latitude,
                'longitude'         => $request->longitude,
                'slug'              => Str::slug($request->slug),
                'thumbnail_image'   => $thumbnail,
                'banner_image'      => $banner
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
