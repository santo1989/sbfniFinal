<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
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
            Create Course <a class="btn btn-sm btn-info" href="{{ route('course.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('course.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-backend.form.input name="course_name" type="text"/>

                <x-backend.form.input name="course_code" type="text"/>

                <x-backend.form.input name="written_pass" type="number"/>

                <x-backend.form.input name="oral_pass" type="number"/>

                <x-backend.form.input name="formative_pass" type="number"/>

                <x-backend.form.input name="practical_pass" type="number"/>

                <x-backend.form.input name="total_written" type="number"/>

                <x-backend.form.input name="total_oral" type="number"/>

                <x-backend.form.input name="total_formative" type="number"/>

                <x-backend.form.input name="total_practical" type="number"/>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>