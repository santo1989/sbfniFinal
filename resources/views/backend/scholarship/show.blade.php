<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Scholarship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('scholarship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Scholarship Details <a class="btn btn-sm btn-info" href="{{ route('scholarship.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Student Name  : </h4>{{ $show_scholarship->scholarship_name }}</p>
                <p><h4>Scholarship Amount  : </h4>{{ $show_scholarship->scholarship_amount }}</p>
                <p><h4>Scholarship Duration  : </h4>{{ $show_scholarship->scholarship_duration }}</p>
                <p><h4>Scholarship Description  : </h4>{{ $show_scholarship->scholarship_description }}</p>
                <p><h4>Scholarship Status  : </h4>{{ $show_scholarship->scholarship_status }}</p>
                <p><h4>Student Reg No  : </h4>{{ $show_scholarship->student_reg_no }}</p>
                <p><h4>Doner Name  : </h4>{{ $show_scholarship->doner_name }}</p>
                <p><h4>Year  : </h4>{{ $show_scholarship->year }}</p>
                <p><h4>Image  : </h4><img src="{{ asset('storage/news/'.$show_scholarship->image) }}" alt="{{ $scholarship->scholarship_name }}" width="100px" height="100px"></p>


        </div>
    </div>

</x-backend.layouts.master>