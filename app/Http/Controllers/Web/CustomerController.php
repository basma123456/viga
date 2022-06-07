<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterStoreWebRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function registerProcess(RegisterStoreWebRequest $request){
        try {
            $customer = Customer::create([
                'full_name'         => $request->name,
                'city_id'           => $request->city,
                'governorate_id'    => $request->governorate,
                'phone'             => $request->phone_number,
                'other_phone'       => $request->other_phone_number,
                'address'           => $request->address,
                'email'             => $request->email,
                'password'          => bcrypt($request->password),
                'status'            => 1,
            ]);
            toastr()->success(__('global.success_update'));
            return redirect()->to('web.auth.login');
        }
        catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }
    }// End RegisterProcess

    public function login() {
        return view("web.auth.login");
    }
    public function loginProcess(Request $request) {
        $validation =  $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required'
        ]);
        $credentials = $request->only(['email', 'password']);
        $admin =  Auth::guard("customers")->attempt($credentials);

        if($admin) {
            return redirect()->intended('web/home');
        }
        return back();
    }

    public function logout() {
        Auth::logout();
        return redirect('web/login');
    }
}
