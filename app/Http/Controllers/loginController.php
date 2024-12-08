<?php

namespace App\Http\Controllers;

use App\Models\adminSignup;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class loginController extends Controller
{
    public function adminSignup(){
        return view('adminPanel.signup');
    }

    public function signupAdmin(Request $request){
        $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required|email|unique:admin_signup',
            'admin_phone' => 'required',
            'admin_password' => 'required|min:8',
            'admin_password_confirmation' => 'required|same:admin_password',
        ]);

        $admins = new adminSignup();
        $admins->admin_name = $request->admin_name;
        $admins->admin_email = $request->admin_email;
        $admins->admin_phone = $request->admin_phone;
        $admins->admin_password = $request->admin_password;
        $admins->save();
        return redirect()->route('loginPage');
    }


    public function loginPage()
    {
        return view('adminPanel.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'admin_email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }
    }
    

public function adminLogout()
{
    Auth::logout();
    return redirect()->route('loginPage');
}
    
public function updateProfile(Request $request)
{
    $adminId = auth()->user()->admin_id;
    $request->validate([
        'admin_name' => 'required|string|max:255',
        'admin_email' => "required|email|unique:admin_signup,admin_email,$adminId,admin_id", 
        'admin_phone' => 'required|string|max:15', 
        'admin_password' => 'required|min:8',
        'admin_password_confirmation' => 'required|same:admin_password',
    ]);
    $admin = adminSignup::find($adminId);
    if (!$admin) {
        return redirect()->back()->withErrors(['error' => 'Admin not found.']); 
    }
    $admin->admin_name = $request->admin_name;
    $admin->admin_email = $request->admin_email;
    $admin->admin_phone = $request->admin_phone;
    $admin->admin_password = $request->admin_password;
    $admin->save();
    return redirect()->route('dashboard')->with('success', 'Profile updated successfully.');
}
}
