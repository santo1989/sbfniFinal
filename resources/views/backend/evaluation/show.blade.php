<x-backend.layouts.master>
    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teacher Evaluation </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Teacher Evaluation</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    @php $sl = 0; @endphp
    <table class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Course</th>
        <th scope="col">Teacher</th>
        <th scope="col">Course Code</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($coursesTaken as $singleCourseTeken)
        <tr>
        <th scope="row">{{ ++$sl }}</th>
        <td>{{ $singleCourseTeken->mycurrentcourse->course->course_name }}</td>
        <td>{{ $singleCourseTeken->mycurrentcourse->teacher->name }}</td>
        <td>{{ $singleCourseTeken->mycurrentcourse->course->course_code }}</td>
        <td>
            <a href="{{ route('teacher.evaluation.create', ['currentcourse_id'=>$singleCourseTeken->mycurrentcourse->id, 'student_id'=>auth()->user()->id, 'year'=>date('Y')]) }}" class="btn btn-primary">Evaluate</a>
        </tr>
        @endforeach
        
    </tbody>
    </table>

</x-backend.layouts.master>