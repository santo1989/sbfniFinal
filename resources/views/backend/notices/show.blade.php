<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Notices </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('notices.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Notice Details <a class="btn btn-sm btn-info" href="{{ route('notices.index') }}">List</a>
        </div>
        <div class="card-body">
            
            <p>Title: {{ $notice->first()->title }}</p>
           
            <p>Date: {{ $notice->first()->date }}</p>
            <p>PDF: <a href="{{ asset('storage/notices/'.$notice->first()->pdf) }}" target="_blank">
                <i class="fas fa-file-pdf"></i> 
                {{ $notice->first()->pdf }}
            </a></p>

             <p>Subject: {{ $notice->first()->subject }}</p>
        </div>
    </div>

</x-backend.layouts.master>