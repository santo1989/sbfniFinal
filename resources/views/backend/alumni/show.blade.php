<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
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
           Alumni Details <a class="btn btn-sm btn-info" href="{{ route('alumni.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Alumni Name  : </h4>{{ $show_alumni->name }}</p>
                <p><h4>Current Position  : </h4>{{ $show_alumni->current_position }}</p>
                <p><h4>Alumni Address  : </h4>{{ $show_alumni->address }}</p>
                <p><h4>Batch  : </h4>{{ $show_alumni->passing_year }}</p>
                <p><h4>Alumni Status  : </h4>{{ $show_alumni->alumni_role }}</p>
                <p><h4>Student Reg No  : </h4>{{ $show_alumni->student_reg_no }}</p>
                <p><h4>Image  : </h4><img src="{{ asset('storage/alumni/'.$show_alumni->img) }}" alt="{{ $show_alumni->img }}"></p>

        </div>
    </div>

</x-backend.layouts.master>