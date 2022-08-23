<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Teachers-Evaluation
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teachers </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('grade.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Teahers</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:100%">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Grade

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('grade.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('grade.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table" style="overflow: scroll;">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Course Name/th>
                        <th>Course Code</th>
                        <th>Is Prepared</th>
                        <th>Knows his subject</th>
                        <th>Is organized</th>
                        <th>Fare at assignment</th>
                        <th>Is flexible</th>
                        <th>Gives proper Direction</th>
                        <th>Is Active</th>
                        <th>Is good at time management</th>
                        <th>Give homework timely</th>
                        <th>Good classroom procedure</th>
                        <th>Good at grading</th>
                        <th>Good at learning</th>
                        <th>teacher_feedback</th>
                        <th>Is creative</th>
                        <th>Good presenter</th>
                        <th>Total score</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($evaluations as $evaluation)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $evaluation->currentcourse->course->course_name }}</td> 
                        
                        <td>{{ $evaluation->currentcourse->course->course_code }}</td>

                        <td>{{ $evaluation->prepared }}</td>
                        <td>{{ $evaluation->knows_subject }}</td>
                        <td>{{ $evaluation->organized }}</td>
                        <td>{{ $evaluation->assignment }}</td>
                        <td>{{ $evaluation->flexible }}</td>
                        <td>{{ $evaluation->directions }}</td>
                        <td>{{ $evaluation->active }}</td>
                        <td>{{ $evaluation->time_management }}</td>
                        <td>{{ $evaluation->homework_time }}</td>
                        <td>{{ $evaluation->classroom_procedure }}</td>
                        <td>{{ $evaluation->grading }}</td>
                        <td>{{ $evaluation->learning }}</td>
                        <td>{{ $evaluation->teacher_feedback }}</td>
                        <td>{{ $evaluation->creativity }}</td>
                        <td>{{ $evaluation->presentation }}</td>
                        <td>{{ $evaluation->score }}</td>

                        
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</x-backend.layouts.master>