<x-backend.layouts.master>
    @php $date = date('Y'); @endphp
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Course </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('course.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Course <a class="btn btn-sm btn-info" href="{{ route('course.index') }}">List</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('current_courses.update', ['current_course' => $currentcourse->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <label for="year">Select Year</label>
                <select name="year" id="year" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required>
                    <option value="">Choose One</option>
                    <option value="{{ $date }}" {{ $currentcourse->year == $date ? 'selected' : '' }}>{{ $date }}</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $date - $i }}" {{ $currentcourse->year == $date - $i ? 'selected' : '' }}>{{ $date - $i }}</option>
                    @endfor
                </select>

                <label for="course">Select Course</label>
                <select name="course_id" id="course_id" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required>
                    <option value="">Choose One</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ $currentcourse->course_id == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                    @endforeach
                </select>

                <label for="teacher">Select Teacher</label>

                <select name="teacher_id" id="teacher_id" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required>
                    <option value="">Choose One</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ $currentcourse->teacher_id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                    @endforeach
                </select>

                <label for="course_year">Select Courses Year</label>
                <select name="course_year" id="course_year" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example" required>
                    <option value="">Choose One</option>
                    <option value="1st" {{ $currentcourse->course_year == '1st Year' ? 'selected' : '' }}>1st Year</option>
                    <option value="2nd" {{ $currentcourse->course_year == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                    <option value="3rd" {{ $currentcourse->course_year == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                </select>
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>