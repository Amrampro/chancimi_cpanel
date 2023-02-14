<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use Auth;

class AdminController extends Controller
{
    //Login view
    function login(){
        return view('backend/login');
        // You could still put
        // return view('backend/login');
    }
    //Submit Login
    function submit_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        // Check user
        $usercheck = Admin::where(['username'=>$request->username, 'password'=>$request->password])->count();
        if($usercheck>0){
            // storing admin infos in variable
            $adminData = Admin::where(['username'=>$request->username, 'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
            return redirect('admin/dashboard');
        } else {
            return redirect('admin/login')->with('error', 'Invalid inputs');
        }
    }
    // Admin dashboard
    function dashboard(){
        // $admin_id = Auth::admin()->id;
        // return view('backend.dashboard', compact('admin_id'));
        return view('backend.dashboard');
        // return 'dashboard';
    }

    // Logout function
    function logout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}
