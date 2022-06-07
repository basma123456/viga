<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthWebController extends Controller
{
//    use AuthenticatesUsers;


   public function loginProcess(Request $request) {
       $validation =  $request->validate([
           'email' => 'required|email|exists:users,email',
           'password' => 'required'
       ]);
       $credentials = $request->only(['email', 'password']);
       $user =  Auth::guard("web")->attempt($credentials);

       if($user) {
           return redirect()->intended('app/home');
       }
       return back();
   }

   public function customRegistration(Request $request)
   {
    //dd("Hello");
       $request->validate([
           'full_name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:6',
           'phone_number' => 'required|unique:users',
           'country' => 'required',
           'street_name' => 'required',
           'building_name' => 'required',
           'city' => 'required',
           'landmark' => 'required',
       ]);

       $data = $request->all();

       User::create([
        'full_name' => $data['full_name'],
        'email' => $data['email'],
        'password' => \Hash::make($data['password']),
        'phone_number' => $data['phone_number'],
        'country' => $data['country'],
        'street_name' => $data['street_name'],
        'building_name' => $data['building_name'],
        'city' => $data['city'],
        'landmark' => $data['landmark'],
        'delivery_instructions' => $data['delivery_instructions'],
      ]);

       return redirect("app/home")->withSuccess('You have signed-in');
   }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('app/home');
    }
}
