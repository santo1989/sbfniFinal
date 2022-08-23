<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseRegistrationController;
use App\Http\Controllers\CurrentCourseController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\FileUploadController;
use App\Models\Role;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/home/teachers', [HomeController::class, 'home_teachers'])->name('home_teachers');
Route::get('/home/alumni', [HomeController::class, 'home_alumni'])->name('home_alumni');
Route::get('/career_page', [HomeController::class, 'career_page'])->name('career_page');
Route::get('/home/teacher_details/{teacher}', [HomeController::class, 'home_teacher_details'])->name('home_teacher_details');
Route::get('/home/alumni_details/{alumni}', [HomeController::class, 'home_alumni_details'])->name('home_alumni_details');
Route::get('/admission_information', [HomeController::class, 'admission_information'])->name('admission_information');
Route::get('/admission_procedure', [HomeController::class, 'admission_procedure'])->name('admission_procedure');
// Route::get('/download', function () {
//     return Storage::download('public/files/admission_form.pdf');
// })->name('admission_from');
Route::get('/download', [HomeController::class, 'download'])->name('download');


Route::get('/home/notices', [HomeController::class, 'home_notices'])->name('home_notices');
Route::get('/home/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/home/internship', [HomeController::class, 'internship'])->name('internship');
Route::get('/home/payment', [HomeController::class, 'payment_guidelines'])->name('payment_guidelines');

//news
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/news/{id}', [HomeController::class, 'news_details'])->name('news_details');

//events
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/home/events/{id}', [HomeController::class, 'event_details'])->name('event_details');

//others
Route::get('/int_advisors', [HomeController::class, 'int_advisors'])->name('int_advisors');
Route::get('/guest_teachers', [HomeController::class, 'guest_teachers'])->name('guest_teachers');
Route::get('/facilities', [HomeController::class, 'labothers'])->name('labothers');
Route::get('/tution_fee', [HomeController::class, 'tution_fee'])->name('tution_fee');
Route::get('/scholarship', [HomeController::class, 'scholarship'])->name('scholarship');
Route::get('/scholarship_details/{id}', [HomeController::class, 'scholarship_details'])->name('scholarship_details');
Route::get('/guidelines', [HomeController::class, 'guidelines'])->name('guidelines');
Route::get('/management', [HomeController::class, 'management_committee'])->name('management_committee');

Route::get('/governing_body', [HomeController::class, 'governing_body'])->name('governing_body');
Route::get('/curriculam', [HomeController::class, 'curriculam'])->name('curriculam');
Route::get('/precidentmessage', [HomeController::class, 'guestmessage'])->name('guestmessage');
Route::get('/coomessage', [HomeController::class, 'guestmessage_coo'])->name('guestmessage_coo');
Route::get('/vpmessage', [HomeController::class, 'guestmessage_vp'])->name('guestmessage_vp');

//message
Route::post('/message', [HomeController::class, 'fstore'])->name('message.fstore');



Route::middleware('auth')->group(function () {
    Route::get('/admin/home', function () {
        return view('backend.home');
    })->name('admin.home');

    //Role
    Route::get('/admin/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/admin/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/admin/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/admin/roles/{role}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/admin/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/admin/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/admin/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');


    // User

    
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // Event
    Route::get('/admin/events/trashed-news', [EventController::class, 'trash'])
        ->name('events.trashed');
    Route::get('/admin/events/trashed-events/{events}/restore', [EventController::class, 'restore'])->name('events.restore');
    Route::delete('/admin/events/trashed-events/{events}/delete', [EventController::class, 'delete'])->name('events.delete');

  
    Route::get('/admin/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/admin/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');


    //Profiles
    Route::get('/admin/profiles/trashed-profiles', [ProfileController::class, 'trash'])
        ->name('profiles.trashed');
    Route::get('/admin/profiles/trashed-profiles/{profile}/restore', [ProfileController::class, 'restore'])->name('profiles.restore');
    Route::delete('/admin/profiles/trashed-profiles/{profile}/delete', [ProfileController::class, 'delete'])->name('profiles.delete');

    Route::resource('/admin/profiles', ProfileController::class);


    // Notice

    Route::get('/admin/notices/trashed-notices', [NoticeController::class, 'trash'])
        ->name('notices.trashed');
    Route::get('/admin/notices/trashed-notices/{notice}/restore', [NoticeController::class, 'restore'])->name('notices.restore');
    Route::delete('/admin/notices/trashed-notices/{notice}/delete', [NoticeController::class, 'delete'])->name('notices.delete');

    
    Route::get('/admin/notices', [NoticeController::class, 'index'])->name('notices.index');
    Route::get('/admin/notices/create', [NoticeController::class, 'create'])->name('notices.create');
    Route::post('/admin/notices', [NoticeController::class, 'store'])->name('notices.store');
    Route::get('/admin/notices/{notice}', [NoticeController::class, 'show'])->name('notices.show');
    Route::get('/admin/notices/{notice}/edit', [NoticeController::class, 'edit'])->name('notices.edit');
    Route::put('/admin/notices/{notice}', [NoticeController::class, 'update'])->name('notices.update');
    Route::delete('/admin/notices/{notice}', [NoticeController::class, 'destroy'])->name('notices.destroy');



    //News
    Route::get('/admin/news/trashed-news', [NewsController::class, 'trash'])
        ->name('news.trashed');
    Route::get('/admin/news/trashed-news/{news}/restore', [NewsController::class, 'restore'])->name('news.restore');
    Route::delete('/admin/news/trashed-news/{news}/delete', [NewsController::class, 'delete'])->name('news.delete');

 
    Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/admin/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/admin/news/{news}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/admin/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/admin/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/admin/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');


    //Qutation
    Route::get('/admin/quotations/trashed-quotations', [QuotationController::class, 'trash'])
        ->name('quotations.trashed');
    Route::get('/admin/quotations/trashed-quotations/{quotation}/restore', [QuotationController::class, 'restore'])->name('quotations.restore');
    Route::delete('/admin/quotations/trashed-quotations/{quotation}/delete', [QuotationController::class, 'delete'])->name('quotations.delete');

    
    Route::get('/admin/quotations', [QuotationController::class, 'index'])->name('quotations.index');
    Route::get('/admin/quotations/create', [QuotationController::class, 'create'])->name('quotations.create');
    Route::post('/admin/quotations', [QuotationController::class, 'store'])->name('quotations.store');
    Route::get('/admin/quotations/{quotation}', [QuotationController::class, 'show'])->name('quotations.show');
    Route::get('/admin/quotations/{quotation}/edit', [QuotationController::class, 'edit'])->name('quotations.edit');
    Route::put('/admin/quotations/{quotation}', [QuotationController::class, 'update'])->name('quotations.update');
    Route::delete('/admin/quotations/{quotation}', [QuotationController::class, 'destroy'])->name('quotations.destroy');


    //Teacher

    Route::get('/admin/teachers/trashed_teachers', [TeacherController::class, 'trash'])
        ->name('teachers.trashed');
    Route::get('/admin/teachers/trashed_teachers/{teacher}/restore', [TeacherController::class, 'restore'])->name('teachers.restore');
    Route::delete('/admin/teachers/trashed_teachers/{teacher}/delete', [TeacherController::class, 'delete'])->name('teachers.delete');

    Route::resource('/admin/teachers', TeacherController::class);

    //course

    Route::resource('/admin/course', CourseController::class);

    //Section

    Route::resource('/admin/section', SectionController::class);

    //Year

    Route::resource('/admin/year', YearController::class);


    // //student

    Route::resource('/admin/student', StudentController::class);


    //alumni

    Route::resource('/admin/alumni', AlumniController::class);


    //scholership

    Route::resource('/admin/scholarship', ScholarshipController::class);

    //ranking

    Route::resource('/admin/ranking', RankingController::class);

    //internship

    Route::resource('/admin/internship', InternshipController::class);

    //fileupload

    Route::get('/admin/fileupload/trashed-fileupload', [FileUploadController::class, 'trash'])
        ->name('fileupload.trashed');
    Route::get('/admin/fileupload/trashed-fileupload/{fileupload}/restore', [FileUploadController::class, 'restore'])->name('fileupload.restore');
    Route::delete('/admin/fileupload/trashed-fileupload/{fileupload}/delete', [FileUploadController::class, 'delete'])->name('fileupload.delete');

    // Route::resource('/admin/fileupload', FileUploadController::class);
    Route::get('/admin/fileupload', [FileUploadController::class, 'index'])->name('fileupload.index');
    Route::get('/admin/fileupload/create', [FileUploadController::class, 'create'])->name('fileupload.create');
    Route::post('/admin/fileupload', [FileUploadController::class, 'store'])->name('fileupload.store');
    Route::get('/admin/fileupload/{fileupload}', [FileUploadController::class, 'show'])->name('fileupload.show');
    Route::get('/admin/fileupload/{fileupload}/edit', [FileUploadController::class, 'edit'])->name('fileupload.edit');
    Route::put('/admin/fileupload/{fileupload}', [FileUploadController::class, 'update'])->name('fileupload.update');
    Route::delete('/admin/fileupload/{fileupload}', [FileUploadController::class, 'destroy'])->name('fileupload.destroy');

    //CurrentCourses
    
    Route::resource('admin/current_courses', CurrentCourseController::class);

    //CourseRegistration
    
    Route::get('/admin/course_registration/create', [CourseRegistrationController::class, 'create'])->name('course_registration.create');
    Route::get('/admin/course_registration', [CourseRegistrationController::class, 'index'])->name('course_registration.index');

    Route::get('admin/year-students', [YearController::class, 'showStudents'])->name("year.students");

    Route::get('/admin/first-year/a-section/{course_year}/{year}', [YearController::class, 'showFirstYearASection'])->name("first-year.a-section");
    Route::post('admin/result/create', [ResultController::class, 'store'])->name('result.store');

    Route::get('/admin/result/{student_id}', [ResultController::class, 'showResults'])->name('result.showresults');

    Route::get('/admin/teacher-evaluation/show/{student_id}/{year}', [EvaluationController::class, 'show'])->name('teacher.evaluation.show');

    Route::get('/admin/teacher-evaluation/create/{student_id}/{year}/{currentcourse_id}', [EvaluationController::class, 'create'])->name('teacher.evaluation.create');

    Route::post('/admin/teacher-evaluation/store', [EvaluationController::class, 'store'])->name('teacher.evaluation.store');

    Route::get('/admin/teacher-evaluation', [EvaluationController::class, 'index'])->name('teacher.evaluation.index');

    Route::get('/admin/teacher-evaluation/{teacher_id}/{year}/{currentcourse_id}', [EvaluationController::class, 'showTeacherEvaluation'])->name('teacher.evaluation.showteacherevaluation');

    Route::get('/admin/course_registration/store/{course_id}/{student_id}', [CourseRegistrationController::class, 'store'])->name('course-registration-store');

    Route::get('/admin/get-courses/{course_year}/{year}/{student_id}', [ResultController::class, 'getCourses'])->name('result_getcourses');

    
});

Route::resource('/admin/message', MessageController::class);
Route::get('/notification/{message}/{notification}', [NotificationController::class, 'showForUpdating'])->name("/admin/message.show");




require __DIR__ . '/auth.php';


Route::get('/foo', function () {
    Artisan::call('storage:link');
});

