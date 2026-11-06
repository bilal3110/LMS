<?php

use App\Http\Controllers\ADashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// <------------------- Website-Frontend ------------------->

Route::get('/', function () {
    return view('frontend.index');
})->name('f-home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('f-about');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('f-gallery');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('f-contact');

Route::post('/contact/form', [FrontendController::class, 'contact'])->name('contactForm');

Route::get('/admission', function () {
    return view('frontend.add-procedure');
})->name('f-add-procedure');

Route::get('/admission/apply', function () {
    return view('frontend.apply');
})->name('f-apply');
Route::post('/apply/application', [ADashboardController::class, 'class_insert'])->name('class_insert');

Route::get('/admission/course',[FrontendController::class,'courseDisplay'])->name('f-c-course');
Route::get('/admission/course/apply/{course_id}',[FrontendController::class,'courseApply'])->name('f-c-apply');
Route::post('/admission/course/apply',[FrontendController::class,'courseForm'])->name('courseForm');


// <------------------- Admin-Panel ------------------->

Route::middleware(['guard'])->group( function(){
Route::get('/adminPanel/dashboard', [ADashboardController::class, 'index'])->name('dashboard');
Route::get('/adminPanel/messages', [ADashboardController::class, 'showMessage'])->name('showMessage');
Route::get('/adminPanel/messages/{cid}', [ADashboardController::class, 'delMessage'])->name('delMessage');
Route::get('/adminPanel/applications', [ADashboardController::class, 'student_apply'])->name('student_apply');
Route::get('/adminPanel/add', function () {
    return view('adminPanel.add-app');
})->name('showAppForm');
Route::get('/adminPanel/applications/{sid}', [ADashboardController::class, 'appDel'])->name('appDel');
Route::post('/adminPanel/applications/accept/{sid}', [ADashboardController::class, 'acceptApp'])->name('acceptApp');
Route::get('/adminPanel/students', [ADashboardController::class, 'showStudents'])->name('showStudents');
Route::get('/adminPanel/students/view/{stud_id}', [ADashboardController::class, 'viewStudent'])->name('viewStudent');
Route::get('/adminPanel/students/view/update/{stud_id}', [ADashboardController::class, 'updateStudentPage'])->name('updateStudentPage');
Route::post('/adminPanel/students/view/update/{stud_id}', [ADashboardController::class, 'editStudent'])->name('editStudent');
Route::get('/adminPanel/students/delete/{stud_id}', [ADashboardController::class, 'delStudent'])->name('delStudent');
Route::get('/adminPanel/students/generateAccount/{stud_id}', [ADashboardController::class, 'genAccount'])->name('genAccount');
Route::get('adminPanel/subjects', [ADashboardController::class, 'showSubjects'])->name('showSubjects');
Route::get('/adminPanel/subjects/add', [ADashboardController::class, 'addSubject'])->name('addSubject');
Route::post('/adminPanel/subjects/add', [ADashboardController::class, 'insertSubject'])->name('insertSubject');
Route::get('/adminPanel/courses', [ADashboardController::class, 'viewCourses'])->name('viewCourses');
Route::get('/adminPanel/courses/add', [ADashboardController::class, 'addCourse'])->name('addCourse');
Route::post('/adminPanel/courses/add', [ADashboardController::class, 'insertCourse'])->name('insertCourse');
Route::get('/adminPanel/courses/delete/{course_id}', [ADashboardController::class, 'delCourse'])->name('delCourse');
Route::get('/adminPanel/courses/edit/{course_id}', [ADashboardController::class, 'editCourse'])->name('editCourse');
Route::post('/adminPanel/courses/edit/{course_id}', [ADashboardController::class, 'updateCourse'])->name('updateCourse');
Route::get('adminPanel/diary', [ADashboardController::class, 'diary'])->name('diary');
Route::get('adminPanel/profile', [ADashboardController::class, 'profile'])->name('profile');
Route::post('adminPanel/profile', [loginController::class, 'updateProfile'])->name('updateProfile');
});

//<---------------------------Admin-Panel-Login-System------------------------->
Route::get('adminPanel/signup', [loginController::class, 'adminSignup'])->name('adminSignup');
Route::post('adminPanel/signup', [loginController::class, 'signupAdmin'])->name('signupAdmin');
Route::get('adminPanel/login', [loginController::class, 'loginPage'])->name('loginPage');
Route::post('adminPanel/login', [loginController::class, 'login'])->name('login');
Route::get('adminPanel/logout', [loginController::class, 'adminlogout'])->name('adminlogout');


//<------------------------Student-Portal-Routes------------------------------------------>
Route::get('/studentPortal/index', [StudentController::class, 'index'])
    ->name('s-dashboard')
    ->middleware('studentGuard');
    Route::get('/studentPortal/profile', [StudentController::class, 'profile'])->name('s-profile')->middleware('studentGuard');
    Route::get('/studentPortal/courses',[StudentController::class,'coursePage'])->name('s-course')->middleware('studentGuard');
    Route::get('/studentPortal/diary',[StudentController::class,'diary'])->name('s-diary')->middleware('studentGuard');



//<------------------------Student-Portal-Login-Sytem-Routes------------------------------------------>
Route::get('/studentPortal/login',[StudentController::class,'loginPage'])->name('s-loginPage');
Route::post('/studentPortal/login',[StudentController::class,'Studentlogin'])->name('s-login');
Route::get('/studentPortal/logout',[StudentController::class,'Studentlogout'])->name('s-logout');

//<------------------------Mail Routes------------------------------------------>
Route::get('/send-email', [MailController::class, 'sendEmail'])->name('sendEmail');