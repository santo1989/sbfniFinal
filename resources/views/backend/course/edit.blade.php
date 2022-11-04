<x-backend.layouts.master>
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

            <form action="{{ route('course.update', ['course' => $single_course->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="course_name" type="text" :value="$single_course->course_name"/>

                <x-backend.form.input name="course_code" type="text" :value="$single_course->course_code"/>

                <x-backend.form.input name="written_pass" type="number" :value="$single_course->written_pass"/>

                <x-backend.form.input name="oral_pass" type="number" :value="$single_course->oral_pass"/>

                <x-backend.form.input name="formative_pass" type="number" :value="$single_course->formative_pass"/>

                <x-backend.form.input name="practical_pass" type="number" :value="$single_course->practical_pass"/>

                <x-backend.form.input name="total_written" type="number" :value="$single_course->total_written"/>

                <x-backend.form.input name="total_oral" type="number" :value="$single_course->total_oral"/>

                <x-backend.form.input name="total_formative" type="number" :value="$single_course->total_formative"/>

                <x-backend.form.input name="total_practical" type="number" :value="$single_course->total_practical"/>

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>