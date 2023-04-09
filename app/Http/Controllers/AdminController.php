<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use Illuminate\Support\Facades\Auth;

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
        $auth = Auth::guard("admin")->attempt(["username"=>$request->username,"password"=>$request->password]);
        
        // $2y$10$T8FScH8lCxZj5E3EZRG5IO.NzClDg.o.77vMroP4X2Uo9wXptYHRq => 12345678
    //     echo('"'.$request->username . '" "' . $request->password.'" :'.$auth);
    //    dd($auth);

        if($auth){
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
