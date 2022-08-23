<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Alumni </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('alumni.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Alumni <a class="btn btn-sm btn-info" href="{{ route('alumni.index') }}">List</a>
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

            <form action="{{ route('alumni.update', ['alumnus' => $single_alumni->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="student_reg_no" type="number" value="{{ $single_alumni->student_reg_no }}"/>

                <x-backend.form.input name="name" type="text" :value="$single_alumni->name"/>

                <x-backend.form.input name="current_position" type="text" :value="$single_alumni->current_position"/>

                <x-backend.form.input name="address" type="text" :value="$single_alumni->address"/>

                <x-backend.form.input name="passing_year" type="text" :value="$single_alumni->passing_year"/>
                    @php
                    $alumniRoles = [
                        'Executive_Committee' => 'Executive_Committee',
                        'member' => 'member',
                    ];
                    @endphp
                <select name="alumni_role" id="alumni_role" class="form-control">
                    <option value="">Select Role</option>
                    @foreach ($alumniRoles as $key => $value)
                    <option value="{{ $key }}" {{ $single_alumni->alumni_role == $key ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>

                <x-backend.form.input name="img" type="file" :value="$single_alumni->img"/>
                

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>