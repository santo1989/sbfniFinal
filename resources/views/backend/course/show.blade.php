<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Course </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('course.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Course Details <a class="btn btn-sm btn-info" href="{{ route('course.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Course Name  : </h4>{{ $show_course->course_name }}</p>
                
                <p><h4>Course Code  : </h4>{{ $show_course->course_code }}</p>

                <p><h4>Written Pass  : </h4>{{ $show_course->written_pass }}</p>

                <p><h4>Oral Pass  : </h4>{{ $show_course->oral_pass }}</p>

                <p><h4>Formative Pass  : </h4>{{ $show_course->formative_pass }}</p>

                <p><h4>Practical Pass  : </h4>{{ $show_course->practical_pass }}</p>

                <p><h4>Total Written  : </h4>{{ $show_course->total_written }}</p>

                <p><h4>Total Oral  : </h4>{{ $show_course->total_oral }}</p>

                <p><h4>Total Formative  : </h4>{{ $show_course->total_formative }}</p>

                <p><h4>Total Practical  : </h4>{{ $show_course->total_practical }}</p>

                

        </div>
    </div>

</x-backend.layouts.master>