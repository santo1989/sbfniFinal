<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Section </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('section.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Section Details <a class="btn btn-sm btn-info" href="{{ route('section.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Section Name  : </h4>{{ $show_section->section_name }}</p>

        </div>
    </div>

</x-backend.layouts.master>