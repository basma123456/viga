<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;
use App\Traits\Image2Trait;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    use ImageTrait;
    use Image2Trait;
    public function index() {

        $sliders = Slider::latest()->paginate(config('setting.LimitPaginate'));
        return view("dashboard.sliders.index", compact('sliders'));

    }// End Index

    public function create() {
        return view("dashboard.sliders.create");
    }// End Create

    public function store(SliderStoreRequest $request) {
        DB::beginTransaction();
        try {

            $uploade_path = 'app-assets/images/slider/';
            $image_url =   $this->storeImg($request->image , $uploade_path );

            $slider = Slider::create([

                'slider_image'  => $request->image ? '/' . $image_url : NULL,
                'sorting'       => $request->sorting,
                'status'        => $request->status
            ]);
        DB::commit();
            toastr()->success(__('global.success_create'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }

    }// End Store

    public function edit($id) {
        $slider = Slider::findOrFail($id);
        return view("dashboard.sliders.edit", compact('slider'));
    }// End Slider

    public function update(SliderUpdateRequest $request,$id){

        DB::beginTransaction();
        try {
            $slider =  Slider::findOrFail($id);
            if($request->hasFile('image')) {
                $uploade_path = 'app-assets/images/slider/';

                $this->deleteImg(File::class , $slider->slider_image);
                $image_url =   $this->storeImg($request->image , $uploade_path );

            }else {
                $image_url = $slider->slider_image;
            }
            $slider->update([
                'slider_image'  => $image_url,
                'sorting'       => $request->sorting,
                'status'        => $request->status
            ]);
            DB::commit();
            toastr()->success(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Update

    public function destroy($id) {

        try {
            $slider = Slider::findOrFail($id);
            $this->deleteImg(File::class , $slider->slider_image);
            $slider->delete();
            toastr()->error(__('global.success_delete'));
            return redirect()->back();
        }
        catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()] );
        }
    }// End Destroy


}
