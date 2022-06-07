<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\SettingsUpdateRequest;


class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $settings = Setting::latest()->paginate(config('site.LimitPaginate'));
        return view("dashboard.settings.index", compact('settings'));
    }

    public function edit($id) {
        $setting = Setting::findOrFail($id);
        return view("dashboard.settings.edit", compact('setting'));
    }// End Edit

    public function update(SettingsUpdateRequest $request ,$id) {
        try {
            $Setting = Setting::findOrFail($id);
            $Setting->update([
                'title'     => $request->title,
                'vision'    => $request->vision,
                'location'    => $request->location,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'facebook'    => $request->facebook,
                'twitter'    => $request->twitter,
                'instgram'    => $request->instgram,
            ]);
            toastr()->info(__('global.success_update'));
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End Update
}
