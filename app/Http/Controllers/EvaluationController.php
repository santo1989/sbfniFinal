<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\CurrentCourse;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function show($student_id, $year)
    {
        $courses = Course::all();
        $coursesTaken = CourseRegistration::where('student_id', $student_id)->where('year', $year)->get();
        return view('backend.evaluation.show', compact('courses', 'coursesTaken', 'student_id', 'year'));
    }

    public function create($student_id, $year, $currentcourse_id)
    {
        $currentcourse = CurrentCourse::find($currentcourse_id);
        // dd($currentcourse_id);
        $teacher = $currentcourse->teacher->id;
        return view('backend.evaluation.create', compact('student_id', 'year', 'currentcourse_id', 'teacher'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'prepared' => 'required',
            'knows_subject' => 'required',
            'organized' => 'required',
            'currentcourse_id' => 'required',
            'teacher_id' => 'required',
        ]);
        // die("check");
        // dd($request->all());
        $newEvaluation = Evaluation::create([
            'prepared' => $request->prepared,
            'knows_subject' => $request->knows_subject,
            'organized' => $request->organized,
            'assignment' => $request->assignment,
            'flexible' => $request->flexible,
            'directions' => $request->directions,
            'active' => $request->active,
            'time_management' => $request->time_management,
            'homework_time' => $request->homework_time,
            'classroom_procedure' => $request->classroom_procedure,
            'grading' => $request->grading,
            'learning' => $request->learning,
            'teacher_feedback' => $request->teacher_feedback,
            'creativity' => $request->creativity,
            'presentation' => $request->presentation,
            'student_id' => $request->student_id,
            'currentcourse_id' => $request->currentcourse_id,
            'year' => $request->year,
            'course_year' => auth()->user()->profile->current_year,
            'teacher_id' => $request->teacher_id

        ]);
        $score = $request->prepared + $request->knows_subject + $request->organized + $request->assignment + $request->flexible + $request->directions + $request->active + $request->time_management + $request->homework_time + $request->classroom_procedure + $request->grading + $request->learning + $request->teacher_feedback + $request->creativity + $request->presentation;
        $newEvaluation->score = $score;
        $newEvaluation->update();
        return redirect()->route('teacher.evaluation.show', [$request->student_id, $request->year]);
    }

    public function index()
    {
        $currentcourses = CurrentCourse::all();
        return view('backend.evaluation.index', compact('currentcourses'));
    }

    public function showTeacherEvaluation($teacher_id, $year, $currentcourse_id)
    {
        $evaluations = Evaluation::where('teacher_id', $teacher_id)->where('year', $year)->where('currentcourse_id', $currentcourse_id)->get();
        // dd($evaluations);
        return view('backend.evaluation.showTeacherEvaluation', compact('evaluations', 'teacher_id', 'year'));
    }
}
