<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthDashboardController extends Controller
{
//    use AuthenticatesUsers;

   public function login() {
       return view("auth.login");
   }
   public function loginProcess(Request $request) {
       $validation =  $request->validate([
           'email' => 'required|email|exists:admins,email',
           'password' => 'required'
       ]);
       $credentials = $request->only(['email', 'password']);
       $admin =  Auth::guard("admins")->attempt($credentials);

       if($admin) {
           return redirect()->intended('dashboard/home');
       }
       return back();
   }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('dashboard/login');
    }
}
