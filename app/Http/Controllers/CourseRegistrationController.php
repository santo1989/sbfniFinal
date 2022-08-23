<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use App\Models\Teacher;
use App\Models\Year;
use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    public function create()
    {
        $currentcourseslist = CurrentCourse::where('year', date('Y'))->get();
        // dd($currentcourseslist);
        
        $courses = CourseRegistration::where('student_id', auth()->user()->id)->where('year', date('Y'))->where('course_year', 1)->get();
        // dd($courses);
        return view('backend.courseregistrations.create', ['currentcourseslist' => $currentcourseslist, 'courses' => $courses]);
    }

    public function index()
    {
        return view('backend.courseregistrations.index');
    }

    public function store($course_id, $student_id)
    {
       
        if(CourseRegistration::where('currentcourse_id', $course_id)->where('student_id', $student_id)->where('year', date('Y'))->where('course_year', 1)->exists()) {
            return redirect()->back()->with('error', 'Error: You have already registered for this course');
        }
        else {
            CourseRegistration::create([
                'currentcourse_id' => $course_id,
                'student_id' => $student_id,
                'year' => date('Y'),
                'course_year' => 1,
            ]);
            return redirect()->back()->with('success', 'Success: You have successfully registered for this course');
        }


        // $course_year = Year::where('year', '2022')->where('student_id', $student_id)->first()->course_year;
        // CourseRegistration::create([
        //     'student_id' => $student_id,
        //     'currentcourse_id' => $course_id,
        //     'year' => '2022',
        //     'course_year' => $course_year,
        // ]);

        // return redirect()->back();
    }

    public function showCourses($student_id, $year, $course_year)
    {
        $courses = CourseRegistration::where('student_id', $student_id)->where('year', $year)->where('course_year', $course_year)->get();
        $course_id = [];
        foreach($courses as $course){
            array_push($course_id, $course->currentcourse_id);
        }
        $current_courses = [];
        for($i = 0; $i<count($course_id); $i++){
            array_push($current_courses, CurrentCourse::find($course_id[$i]));
        }

        $course_id_from_current_courses = [];
        foreach($current_courses as $current_course){
            array_push($course_id_from_current_courses, $current_course->course_id);
        }

        $teacher_id_from_current_courses = [];
        foreach($current_courses as $current_course){
            array_push($teacher_id_from_current_courses, $current_course->teacher_id);
        }

        $taken_courses = [];
        for($i = 0; $i<count($course_id_from_current_courses); $i++){
            $taken_courses[$i] = Course::find($course_id_from_current_courses[$i]);
        }

        $taken_teachers = [];
        for($i = 0; $i<count($teacher_id_from_current_courses); $i++){
            $taken_teachers[$i] = Teacher::find($teacher_id_from_current_courses[$i]);
        }
        // $check = [$courses, $current_courses];
        // return response()->json($check);
        //return response()->json($current_courses);
        return [$courses, $taken_courses, $taken_teachers, $current_courses];
    }
}
