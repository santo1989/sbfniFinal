<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function getCourses($course_year, $year, $student_id)
    {
        $courseIds = CourseRegistration::where('student_id', $student_id)->where('year', $year)->where('course_year', $course_year)->get();

        $student = User::where('id', $student_id)->first();

        $currentList = [];
        foreach ($courseIds as $courseId) {
            
            array_push($currentList, $courseId->mycurrentcourse);
        }
        $course_ids = [];
        $teachersWithInitials = [];
        foreach($currentList as $cl){
            // dd($cl->teacher->name." (".$cl->teacher->initial.")");
            array_push($course_ids, $cl->course_id);
            array_push($teachersWithInitials, $cl->teacher->name." (".$cl->teacher->initial.")");
        }
        $courses = [];
        foreach($course_ids as $course_id){
            array_push($courses, Course::find($course_id));
        }
        
        // return [$currentList, $student_id,$course_year, $year, $courses];
        return view('backend.result.courses', compact('currentList', 'student_id','course_year', 'year', 'courses', 'student', 'teachersWithInitials'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'year' => 'required',
            'course_year' => 'required',
        ]);
        // dd($request->teacher[0]);
        // $course_ids = [];
        // for($i = 0; $i<count($request->total); $i++){
        //     array_push($course_ids, "course_id_".$i);
        // }

        for($i=0; $i<count($request->total); $i++){
            Result::create([
                'student_id' => $request->student_id,
                'course_id' => $request->course_id[$i],
                'year' => $request->year,
                'course_year' => $request->course_year,
                'written' => $request->written[$i],
                'practical' => $request->practical[$i],
                'formative' => $request->formative[$i],
                'oral' => $request->oral[$i],
                'total' =>
                $request->written[$i] + $request->practical[$i] + $request->formative[$i] + $request->oral[$i],
                'grade' => $request->grade[$i], //need to be calculated
                'teacher' => $request->teacher[$i],
            ]);
        }
        return redirect()->back();
    }

    public function showResults($student_id)
    {
        $firstYearResults = Result::where('student_id', $student_id)->where('course_year', '1st')->get();
        $secondYearResults = Result::where('student_id', $student_id)->where('course_year', '2nd')->get();
        $thirdYearResults = Result::where('student_id', $student_id)->where('course_year', '3rd')->get();
        // dd($firstYearResults);
        return view('backend.result.show', compact('firstYearResults', 'secondYearResults', 'thirdYearResults'));
    }
}
