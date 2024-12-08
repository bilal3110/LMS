<?php

namespace App\Http\Controllers;

use App\Models\courseApply;
use App\Models\courses;
use App\Models\StudentPortal;
use App\Models\subjects;
use Auth;
use Hash;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $portal = auth()->guard('studentGuard')->user();

        if (!$portal) {
            return redirect()->route('login')->with('error', 'Please log in to view your subjects.');
        }
    
        $subjects = subjects::where('class_name', $portal->stud_class)->get();
        // dd($portal);
        return view('studentPortal.index', compact('subjects', 'portal'));
    }
    


    public function loginPage()
    {
        return view('studentPortal.login');
    }

    public function Studentlogin(Request $request)
    {
        $credentials = $request->validate([
            'portal_email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('studentGuard')->attempt($credentials)) {
            return redirect()->route('s-dashboard');
        } else {
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }

    public function Studentlogout()
    {
        Auth::guard('studentGuard')->logout();
        return redirect()->route('s-loginPage');
    }


    public function profile()
    {
        return view('studentPortal.profile');
    }

    public function coursePage()
    {
        // Fetch the authenticated student's details
        $portal = auth()->guard('studentGuard')->user();
    
        if (!$portal) {
            // If no student is logged in, redirect to login
            return redirect()->route('login')->with('error', 'Please log in to view your courses.');
        }
    
        // Fetch all course applications for the logged-in student's email
        $courseApplications = courseApply::where('email', $portal->stud_email)->get();
    
        if ($courseApplications->isEmpty()) {
            // If no applications are found
            return view('studentPortal.courses', ['courses' => []])->with('error', 'No course applications found for your account.');
        }
    
        // Fetch all courses using the course IDs from the applications
        $courseIds = $courseApplications->pluck('course_id')->toArray();
        $courses = courses::whereIn('course_id', $courseIds)->get();
    
        // Pass the courses to the view
        return view('studentPortal.courses', compact('courses'));
    }
    
    

    public function diary()
    {
        return view('studentPortal.diary');
    }

}
