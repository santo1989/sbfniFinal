<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Internship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('internship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Internship <a class="btn btn-sm btn-info" href="{{ route('internship.index') }}">List</a>
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

            <form action="{{ route('internship.update', ['internship' => $single_internship->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="student_reg_no" type="number" value="{{ $single_internship->student_reg_no }}"/>

                <x-backend.form.input name="name" type="text" :value="$single_internship->name"/>

                <x-backend.form.input name="current_position" type="text" :value="$single_internship->current_position"/>

                <x-backend.form.input name="address" type="text" :value="$single_internship->address"/>

                <x-backend.form.input name="passing_year" type="year" :value="$single_internship->passing_year"/>

                <select name="internship_role" id="internship_role">
                    <option value="">Select Status</option>
                    <option value="1" {{ $single_internship->internship_role == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $single_internship->internship_role == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                
                <x-backend.form.input name="internship_start_date" type="date" :value="$single_internship->internship_start_date"/>

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>