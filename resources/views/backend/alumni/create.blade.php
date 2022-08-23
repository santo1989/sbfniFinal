<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Alumni </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('alumni.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Alumni <a class="btn btn-sm btn-info" href="{{ route('alumni.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('alumni.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-backend.form.input name="student_reg_no" type="number"/>

                <x-backend.form.input name="name" type="text"/>

                <x-backend.form.input name="current_position" type="text"/> 
                
                <x-backend.form.input name="address" type="text"/>

                <x-backend.form.input name="passing_year" type="text"/>
                    @php
                    $alumniRoles = [
                        'Executive_Committee' => 'Executive_Committee',
                        'member' => 'member',
                    ];
                    @endphp
                <select name="alumni_role" id="alumni_role" class="form-control">
                    <option value="">Select Role</option>
                    @foreach ($alumniRoles as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <x-backend.form.input name="img" type="file"/>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>