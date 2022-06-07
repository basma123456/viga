<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProfileController extends Controller
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
    public function profile()
    {

        return view('site.profile');
    }

    public function updateProfile(Request $request )
    {

        //dd($request->all());

        $user = User::find(auth()->user()->id);

        $this->validate($request, [

            'full_name'  => 'required|string|max:191',
            'phone_number'  => 'required|string|unique:users,phone_number,'.$user->id,
            'street_name'  => 'required|string|max:191',
            'landmark'  => 'required|string|max:191',
            'password'  => 'sometimes',
            'confirm_password' => 'required_with:password|same:password|min:6'

        ]);


        if(!empty($request->password)){
            $request->merge(['password'=>Hash::make($request['password'])]);
        }
        $user->update($request->all());
        toast('message', 'profile updated');
        return redirect()->back();

    }

}
