<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        return view('authorized.signIn');
    }

    public function dashboard(){
        return view('admin.index');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'], 'status' => 1])) {
            
            $request->session()->regenerate();
            return redirect()->route('admin-dashboard')->with('errorMsg' , 'You are successfully loged in..');

        } return back()->with('errorMsg', 'Invalid email or Password or your account not activate.!s');
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        session()->flush();

        return redirect()->route('login-to-go')->with('errorMsg','You are loged out successfully..');
    }
}
