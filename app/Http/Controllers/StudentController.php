<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use App\Models\Section;
use App\Models\Student;
use App\Models\Year;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
            
            $studentCollection = Student::latest();
    
            if (request('search')) {
                $studentCollection = $studentCollection
                    ->where('student_reg_no', 'like', '%' . request('search') . '%')
                    ->orWhere('year', 'like', '%' . request('search') . '%')
                    ->orWhere('section', 'like', '%' . request('search') . '%');
            }
    
            $student = $studentCollection->paginate(10);
    
            return view('backend.student.index', [
                'students' => $student
            ]);
        }
    
        public function create()
        {
            // $this->authorize('create-markinput');
            $cours=Course::all();
            $year=Year::all();
            $sections=Section::all();
            $students=Student::all();
            $profiles=Profile::all();
            // $user=auth()->user();
            return view('backend.student.create',[
                'courses'=>$cours,
                'years'=>$year,
                'sections'=>$sections,
                'students'=>$students,
                'profiles'=>$profiles,
                // 'user'=>$user
            ]);
        }

        public function store(Request $request)
        {
            //  @dd($request);
            $cours=Course::all();
            $year=Year::all();
            $sections=Section::all();
            $students=Student::all();
            $profiles=Profile::all();
            // $user=auth()->user();
            try {
                Student::create([ 
                    'student_reg_no' => $request->student_reg_no,
                    'year' => $request->year,
                    'section' => $request->section,
                    'course_name' => $request->array_pluck($cours, 'course_name'),
                ]);
            } catch (QueryException $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            }

            return redirect()->route('student.index')->with('success', 'Student created successfully');
        }

        public function edit($id)
        {
            $student = Student::findOrFail($id);
            $cours=Course::all();
            $year=Year::all();
            $sections=Section::all();
            $students=Student::all();
            $profiles=Profile::all();
            return view('backend.student.edit',[
                'single_student'=>$student,
                'courses'=>$cours,
                'years'=>$year,
                'sections'=>$sections,
                'students'=>$students,
                'profiles'=>$profiles,
            ]);
        }

        public function update(Request $request, $id)
        {
            $student = Student::findOrFail($id);
            $cours=Course::all();
            $year=Year::all();
            $sections=Section::all();
            $students=Student::all();
           
            try {
                $student->update([
                    'student_reg_no' => $request->student_reg_no,
                    'year' => $request->year,
                    'section' => $request->section,
                    'course_name' => $request->course_name,
                ]);
            } catch (QueryException $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            }

            return redirect()->route('student.index')->with('success', 'Student updated successfully');
        }

        public function destroy($id)
        {
            $student = Student::findOrFail($id);
            try {
                $student->delete();
            } catch (QueryException $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            } catch (Exception $e) {
                return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
            }

            return redirect()->route('student.index')->with('success', 'Student deleted successfully');
        }

        public function show($id)
        {
            $student = Student::findOrFail($id);
            $cours=Course::all();
            $year=Year::all();
            $sections=Section::all();
            $students=Student::all();
            return view('backend.student.show',[
                'show_student'=>$student,
                'courses'=>$cours,
                'years'=>$year,
                'sections'=>$sections,
                'students'=>$students,
            ]);
        }

    }

