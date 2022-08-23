<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Internship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('internship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Internship Details <a class="btn btn-sm btn-info" href="{{ route('internship.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Internship Name  : </h4>{{ $show_internship->name }}</p>
                <p><h4>Current Position  : </h4>{{ $show_internship->current_position }}</p>
                <p><h4>Address  : </h4>{{ $show_internship->address }}</p>
                <p><h4>Passing Year  : </h4>{{ $show_internship->passing_year }}</p>
                <p><h4>Internship Status  : </h4>{{ $show_internship->internship_role }}</p>
                <p><h4>Internship Start Date  : </h4>{{ $show_internship->internship_start_date }}</p>
                <p><h4>Student Reg No  : </h4>{{ $show_internship->student_reg_no }}</p>

        </div>
    </div>

</x-backend.layouts.master>