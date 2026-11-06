<?php

namespace App\Http\Controllers;
use App\Models\contact;
use App\Models\courseApply;
use App\Models\courses;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $contact = new contact();

        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('f-contact');
    }

    public function courseDisplay()
    {
        $courses = courses::all();
        return view('frontend.c-course', compact('courses'));
    }

    public function courseApply($course_id)
    {
        $course = courses::findOrFail($course_id);
        return view('frontend.c-apply', compact('course'));
    }

    public function courseForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required',
            'course_id' => 'required|integer',
            'is_horizon_student' => 'required|boolean',
        ]);
    
        courseApply::create($request->all());
    
        return redirect()->route('f-c-course')->with('success', 'You have successfully applied for the course.');
    }
    
}
