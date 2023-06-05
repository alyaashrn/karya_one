<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = Auth::guard('cekrol')->attempt(['email' => $request->email, 'password' => $request->password]);
        
        if(!$user){
            Session::flash('errors', 'Email or Password isn`t matched with our database');
            return back();
        }
        if($user->aksesrol==1){
            return redirect('/dashboardcl')->with('success', 'success login');
        }
        if($user->aksesrol==2){
            return redirect('/dashboardfr')->with('success', 'success login');
        }
    }
}
