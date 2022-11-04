<x-backend.>
    <x-slot name="pageTitle">
        Teachers-Evaluation
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teachers </x-slot>

            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Teahers</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <x-backend.layouts.elements.errors :errors="$errors" />

            
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <i class="fas fa-table me-1"></i>
            <span class="ml-1">Teachers Evaluation</span>
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Course Name</th>
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
     

</x-backend.layouts.master>