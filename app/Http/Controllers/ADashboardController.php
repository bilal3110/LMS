<?php

namespace App\Http\Controllers;
use App\Models\adminSignup;
use App\Models\contact;
use App\Models\classes;
use App\Models\courses;
use App\Models\student;
use App\Models\StudentPortal;
use App\Models\subjects;
use Auth;
use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;

class ADashboardController extends Controller
{
    public function index()
    {
        $students = student::count();
        $classes = classes::count();
        $courses = courses::count();
        $totalContacts = Contact::count();
        $message = Contact::latest()->take(5)->get();

        $data = compact('students', 'classes', 'courses', 'totalContacts', 'message');
        return view('adminPanel.dashboard')->with($data);
    }


    public function showMessage(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $contact = Contact::where('name', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%")
                ->orWhere('phone', 'LIKE', "%$search%")
                ->paginate(5);
        } else {
            $contact = Contact::latest()->paginate(5);
        }

        return view('adminPanel.message', compact('contact'));
    }


    public function delMessage($id)
    {
        $contact = contact::find($id);
        $contact->delete();
        return redirect()->back();
    }

    public function class_insert(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'address' => 'required|max:100',
            'class' => 'required',
        ]);

        $class = new Classes();
        $class->student_name = $request->input('student_name');
        $class->father_name = $request->input('father_name');
        $class->mother_name = $request->input('mother_name');
        $class->contact = $request->input('contact');
        $class->email = $request->input('email');
        $class->address = $request->input('address');
        $class->class = $request->input('class');
        $class->save();

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function student_apply(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $application = Classes::where('student_name', 'LIKE', "%$search%")
                ->orWhere('father_name', 'LIKE', "%$search%")
                ->orWhere('mother_name', 'LIKE', "%$search%")
                ->orWhere('contact', 'LIKE', "%$search%")
                ->orWhere('class', 'LIKE', "%$search%")
                ->orWhere('email', 'LIKE', "%$search%")
                ->paginate(8);
        } else {
            $application = classes::latest()->paginate(8);
        }
        return view('adminPanel.app', compact('application'));
    }

    public function appDel($id)
    {
        $application = classes::find($id);
        $application->delete();
        return redirect()->back();
    }

    public function acceptApp($id)
    {
        $application = classes::find($id);

        if (!$application) {
            return redirect()->back() - with("Error! Data Not Found");
        }

        $year = Carbon::now()->year;
        $class = $application->class;
        $studentCount = classes::where('class', $class)->count();
        $rollNo = $year . "-" . $class . "-" . ($studentCount - 1);
        $section = chr(65 + intdiv($studentCount, 30));

        student::insert([
            'stud_name' => $application->student_name,
            'stud_father' => $application->father_name,
            'stud_mother' => $application->mother_name,
            'stud_phone' => $application->contact,
            'stud_email' => $application->email,
            'stud_address' => $application->address,
            'stud_class' => $application->class,
            'stud_rollNo' => $rollNo,
            'stud_section' => $section,
        ]);

        classes::where('sid', $id)->delete();

        return redirect()->back();
    }

    public function showStudents(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $students = student::where('stud_name', 'LIKE', "%$search%")
                ->orWhere('stud_father', 'LIKE', "%$search%")
                ->orWhere('stud_mother', 'LIKE', "%$search%")
                ->orWhere('stud_phone', 'LIKE', "%$search%")
                ->orWhere('stud_email', 'LIKE', "%$search%")
                ->orWhere('stud_address', 'LIKE', "%$search%")
                ->orWhere('stud_class', 'LIKE', "%$search%")
                ->orWhere('stud_rollNo', 'LIKE', "%$search%")
                ->orWhere('stud_section', 'LIKE', "%$search%")
                ->paginate(8);
        } else {
            $students = student::latest()->paginate(8);
        }
        return view('adminPanel.student', compact('students'));
    }

    public function viewStudent($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }
        return view('adminPanel.view-student', compact('student'));
    }

    public function updateStudentPage($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }
        return view('adminPanel.updateStudent', compact('student'));
    }

    public function editStudent(Request $request, $id)
    {
        $request->validate([
            'stud_name' => 'required|string|max:255',
            'stud_father' => 'required|string|max:255',
            'stud_mother' => 'nullable|string|max:255',
            'stud_phone' => 'required',
            'stud_email' => 'required|email|max:255',
            'stud_address' => 'required|string|max:500',
            'stud_class' => 'required|string|max:50',
            'stud_rollNo' => 'required|string|max:50',
            'stud_section' => 'nullable|string|max:50',
            'stud_img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $student = Student::findOrFail($id);

        if ($request->hasFile('stud_img')) {
            $filename = time() . '_LMS.' . $request->file('stud_img')->getClientOriginalExtension();
            $request->file('stud_img')->storeAs('public/image', $filename);
            $student->stud_img = 'storage/image/' . $filename;
        }

        $student->stud_name = $request->input('stud_name');
        $student->stud_father = $request->input('stud_father');
        $student->stud_mother = $request->input('stud_mother');
        $student->stud_phone = $request->input('stud_phone');
        $student->stud_email = $request->input('stud_email');
        $student->stud_address = $request->input('stud_address');
        $student->stud_class = $request->input('stud_class');
        $student->stud_rollNo = $request->input('stud_rollNo');
        $student->stud_section = $request->input('stud_section');
        $student->save();
        if ($student->save()) {
            return redirect()->route('showStudents')->with('success', 'Student updated successfully.');
        } else {
            echo "You Cooked";
        }
    }

    public function delStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back();
    }


    public function genAccount($id)
    {
        $student = Student::find($id);
        if (!$student) {
            return redirect()->route('showStudents')->with('error', 'Student not found.');
        }
        $portalEmail = $student->stud_rollNo . "@horizon.edu.pk";
        $existingPortal = StudentPortal::where('portal_email', $portalEmail)->first();

        if ($existingPortal) {
            return redirect()->route('showStudents')->with('error', 'Account for this student already exists.');
        }
        $portalPassword = Hash::make('Horizon123');
        $portal = StudentPortal::create([
            'stud_name' => $student->stud_name,
            'stud_rollNo' => $student->stud_rollNo,
            'stud_email' => $student->stud_email,
            'portal_email' => $portalEmail,
            'stud_password' => $portalPassword,
            'stud_father' => $student->stud_father,
            'stud_mother' => $student->stud_mother,
            'stud_phone' => $student->stud_phone,
            'stud_address' => $student->stud_address,
            'stud_class' => $student->stud_class,
            'stud_section' => $student->stud_section,
            'stud_image' => $student->stud_img,
        ]);
        if ($portal) {
            $message = ['success' => 'Student portal created successfully.'];
        } else {
            $message = ['error' => 'Failed to create student portal.'];
        }        
        return redirect()->route('showStudents')->with($message);
    }

    public function showSubjects()
    {
        $subjects = subjects::all();
        return view('adminPanel.subject', compact('subjects'));
        // return view('adminPanel.subject');
    }

    public function addSubject()
    {
        return view('adminPanel.add-subject');
    }

    public function insertSubject(Request $request)
    {
        $subject = new subjects();
        $subject->class_name = $request->input('class_name');
        $subject->sub_names = json_encode([
            $request->input('sub1'),
            $request->input('sub2'),
            $request->input('sub3'),
            $request->input('sub4'),
            $request->input('sub5'),
            $request->input('sub6'),
            $request->input('sub7'),
            $request->input('sub8'),
        ]);
        $subject->save();
        return redirect()->back()->with('success', 'Subject Added Successfully');
    }

    public function viewCourses()
    {
        $courses = courses::paginate(8);
        return view('adminPanel.courses', compact('courses'));
        // return view('adminPanel.courses');
    }

    public function addCourse()
    {
        return view('adminPanel.add-course');
    }

    public function insertCourse(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'course_duration' => 'required',
            'course_fees' => 'required', // Corrected the name here
            'course_skills' => 'required',
            'course_image' => 'required|image|mimes:jpeg,jpg,png|max:5120'
        ]);

        $course = new courses();

        if ($request->hasFile('course_image')) {
            $filename = time() . "_LMS." . $request->file('course_image')->getClientOriginalExtension();
            $request->file('course_image')->storeAs('public/image', $filename);
            $course->course_image = 'storage/image/' . $filename;
        }

        $course->course_title = $request->input('course_title');
        $course->course_duration = $request->input('course_duration');
        $course->course_fee = $request->input('course_fees');
        $course->course_skills = $request->input('course_skills');
        $course->save();

        return redirect()->back()->with('success', 'Course Added Successfully');
    }

    public function delCourse($id)
    {
        $course = courses::find($id);
        $course->delete();
        return redirect()->back()->with('success', 'Course Deleted Successfully');
    }

    public function editCourse($id)
    {
        $course = courses::find($id);
        return view('adminPanel.edit-course', compact('course'));
    }

    public function updateCourse(Request $request, $id)
    {
        $request->validate([
            'course_title' => 'required',
            'course_duration' => 'required',
            'course_fees' => 'required',
            'course_skills' => 'required',
            'course_image' => 'image|mimes:jpeg,jpg,png|max:5120',
        ]);

        $course = courses::find($id);
        if ($request->hasFile('course_image')) {
            $filename = time() . "_LMS." . $request->file('course_image')->getClientOriginalExtension();
            $request->file('course_image')->storeAs('public/image', $filename);
            $course->course_image = 'storage/image/' . $filename;
        }
        $course->course_title = $request->input('course_title');
        $course->course_duration = $request->input('course_duration');
        $course->course_fee = $request->input('course_fees');
        $course->course_skills = $request->input('course_skills');
        $course->save();
        return redirect()->route('viewCourses')->with('success', 'Course Updated Successfully');
    }

    public function diary()
    {
        return view('adminPanel.diary');
    }

    public function profile()
    {
        return view('adminPanel.profile');
    }


}
