<x-backend.layouts.master>
    @php $date = date('Y'); @endphp
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Currentcourse </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('course.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Course <a class="btn btn-sm btn-info" href="{{ route('current_courses.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('current_courses.store') }}" method="post" enctype="multipart/form">
            @csrf
                <label for="year">Select Year</label>
                <select name="year" id="year" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="">Choose One</option>
                    <option value="{{ $date }}">{{ $date }}</option>
                    @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $date - $i }}">{{ $date - $i }}</option>
                    @endfor
                </select>
            

                <label for="year">Select Course</label>
                <select name="course_id" id="course_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="">Choose One</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
           
                <label for="year">Select Teacher</label>
                <select name="teacher_id" id="teacher_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option value="">Choose One</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
            

                <label for="course_year">Select Course Year</label>
                <select name="course_year" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="course_year">
                    <option value="">Select Course</option>
                    <option value="1st">1st Year</option>
                    <option value="2md">2nd Year</option>
                    <option value="3rd">3rd Year</option>
                    
                </select>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>

        </div>
    </div>


</x-backend.layouts.master>

