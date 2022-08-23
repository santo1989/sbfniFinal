<x-backend.layouts.master>
    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teacher Evaluation </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Teacher Evaluation</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>
<form action="{{ route('teacher.evaluation.store') }}" method="post">
    @csrf
    <table class="table table-striped table-dark table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Statement</th>
            <th scope="col" style="text-align: center;">Strongly Agree</th>
            <th scope="col" style="text-align: center;">Agree</th>
            <th scope="col" style="text-align: center;">Neutral</th>
            <th scope="col" style="text-align: center;">Disagree</th>
            <th scope="col" style="text-align: center;">Strongly Disagree</th>
            </tr>
        </thead>
        <tbody id="tableD">
        <tr>
            <th scope="row">1</th>
            <td>Teacher is prepared for Class</td>
            <td style="text-align: center;"><input type="radio" name="prepared" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="prepared" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="prepared" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="prepared" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="prepared" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher Knows his/her Subject</td>
            <td style="text-align: center;"><input type="radio" name="knows_subject" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="knows_subject" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="knows_subject" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="knows_subject" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="knows_subject" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher is organized and neat</td>
            <td style="text-align: center;"><input type="radio" name="organized" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="organized" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="organized" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="organized" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="organized" value="-2"></td>
        </tr>
        
        <tr>
            <th scope="row">1</th>
            <td>Teacher is flexible in accommodating for individual student need</td>
            <td style="text-align: center;"><input type="radio" name="flexible" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="flexible" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="flexible" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="flexible" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="flexible" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher allows you to be active in the classroom learning environment</td>
            <td style="text-align: center;"><input type="radio" name="active" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="active" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="active" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="active" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="active" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher manage the time well</td>
            <td style="text-align: center;"><input type="radio" name="time_management" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="time_management" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="time_management" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="time_management" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="time_management" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher is creative in activities and lessons</td>
            <td style="text-align: center;"><input type="radio" name="creativity" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="creativity" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="creativity" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="creativity" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="creativity" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher gives good feedback fairly</td>
            <td style="text-align: center;"><input type="radio" name="homework_time" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="homework_time" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="homework_time" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="homework_time" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="homework_time" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher encourage students and actives in class</td>
            <td style="text-align: center;"><input type="radio" name="classroom_procedure" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="classroom_procedure" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="classroom_procedure" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="classroom_procedure" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="classroom_procedure" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher take assignments and return feedback on time</td>
            <td style="text-align: center;"><input type="radio" name="assignment" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="assignment" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="assignment" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="assignment" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="assignment" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Techer gives proper direction about classes and exams</td>
            <td style="text-align: center;"><input type="radio" name="directions" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="directions" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="directions" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="directions" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="directions" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher gives clear instruction about classroom procedure</td>
            <td style="text-align: center;"><input type="radio" name="grading" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="grading" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="grading" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="grading" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="grading" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher updates the teaching methods</td>
            <td style="text-align: center;"><input type="radio" name="learning" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="learning" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="learning" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="learning" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="learning" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher feedback</td>
            <td style="text-align: center;"><input type="radio" name="teacher_feedback" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="teacher_feedback" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="teacher_feedback" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="teacher_feedback" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="teacher_feedback" value="-2"></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Teacher's presentation skill is good</td>
            <td style="text-align: center;"><input type="radio" name="presentation" value="2"></td>
            <td style="text-align: center;"><input type="radio" name="presentation" value="1"></td>
            <td style="text-align: center;"><input type="radio" name="presentation" value="0"></td>
            <td style="text-align: center;"><input type="radio" name="presentation" value="-1"></td>
            <td style="text-align: center;"><input type="radio" name="presentation" value="-2"></td>
        </tr>
        </tbody>
    </table>
    <input type="hidden" name="student_id" value="{{ $student_id }}">
    <input type="hidden" name="currentcourse_id" value="{{ $currentcourse_id }}">
    <input type="hidden" name="year" value="{{ $year }}">
    <input type="hidden" name="teacher_id" value="{{ $teacher }}">
    <div class="d-flex justify-content-center align-items-center"><input type="submit" class="btn btn-warning"></div>
   
</form>

</x-backend.layouts.master>