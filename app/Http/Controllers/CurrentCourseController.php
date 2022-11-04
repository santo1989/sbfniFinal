<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CurrentCourse;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class CurrentCourseController extends Controller
{
    public function index()
    {
        $currentcourses = CurrentCourse::where('year', date('Y'))->get();
        return view('backend.currentcourses.index', compact('currentcourses'));
    }

    public function create(){
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('backend.currentcourses.create', ['teachers' => $teachers, 'courses' => $courses]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'teacher_id' => 'required',
            'year' => 'required',
        ]);
        try{
            if(CurrentCourse::where('course_id', $request->course_id)->where('year', $request->year)->exists()){
                return redirect()->route('current_courses.index')->withErrors( 'Course already exists for this year');
            }
            CurrentCourse::create([
                'teacher_id' => $request->teacher_id,
                'course_id' => $request->course_id,
                'year' => $request->year,
                'course_year' => $request->course_year,
            ]);

            return redirect()->route('current_courses.index')->with('success', 'Course has been added successfully');
        }catch(Exception $e){
            return redirect()->route('current_courses.index')->with('error', 'Course has not been added');
        }
    }

    public function edit($id)
    {
        $currentcourse = CurrentCourse::find($id);
        $teachers = Teacher::all();
        $courses = Course::all();
        return view('backend.currentcourses.edit', ['currentcourse' => $currentcourse, 'teachers' => $teachers, 'courses' => $courses]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'teacher_id' => 'required',
            'year' => 'required',
        ]);
        try{
            $currentcourse = CurrentCourse::find($id);
            $currentcourse->update([
                'teacher_id' => $request->teacher_id,
                'course_id' => $request->course_id,
                'year' => $request->year,
                'course_year' => $request->course_year,
            ]);

            return redirect()->route('current_courses.index')->with('success', 'Course has been updated successfully');
        }catch(Exception $e){
            return redirect()->route('current_courses.index')->with('error', 'Course has not been updated');
        }
    }
}
