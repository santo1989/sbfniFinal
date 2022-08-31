<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function getCourses($course_year, $year, $student_id)
    {
        $courseIds = CourseRegistration::where('student_id', $student_id)->where('year', $year)->where('course_year', $course_year)->get();
        $currentList = [];
        foreach ($courseIds as $courseId) {
            
            array_push($currentList, $courseId->mycurrentcourse);
        }
        $course_ids = [];
        foreach($currentList as $cl){
            array_push($course_ids, $cl->course_id);
        }
        $courses = [];
        foreach($course_ids as $course_id){
            array_push($courses, Course::find($course_id));
        }
        // return [$currentList, $student_id,$course_year, $year, $courses];
        return view('backend.result.courses', compact('currentList', 'student_id','course_year', 'year', 'courses'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'currentcourse_id' => 'required',
            'student_id' => 'required',
            'year' => 'required',
            'course_year' => 'required',
        ]);

        dd(($request->all()));
        $courses_id = [];
        for($i = 0; $i<count($request->total); $i++){
            array_push($courses_id, "course_id_".$i);
        }

        for($i=0; $i<count($request->total); $i++){
            Result::create([
                'student_id' => $request->student_id,
                'currentcourse_id' => $request->course_id[$i],
                'year' => $request->year,
                'course_year' => $request->course_year,
                'written' => $request->written[$i],
                'practical' => $request->practical[$i],
                'formative' => $request->formative[$i],
                'oral' => $request->oral[$i],
                'written_pass' => $request->written_pass[$i],
                'practical_pass' => $request->practical_pass[$i],
                'formative_pass' => $request->formative_pass[$i],
                'oral_pass' => $request->oral_pass[$i],
                'total' => $request->total[$i],
                'grade' => $request->grade[$i],
            ]);
        }
        return redirect()->back();
    }

    public function showResults($student_id)
    {
        $firstYearResults = Result::where('student_id', $student_id)->where('course_year', '1')->get();
        $secondYearResults = Result::where('student_id', $student_id)->where('course_year', '2')->get();
        $thirdYearResults = Result::where('student_id', $student_id)->where('course_year', '3')->get();
        // dd(count($secondYearResults));
        return view('backend.result.show', compact('firstYearResults', 'secondYearResults', 'thirdYearResults'));
    }
}
