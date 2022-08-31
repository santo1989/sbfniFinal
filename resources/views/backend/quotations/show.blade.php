<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Quotations </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('quotations.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Quotation Details <a class="btn btn-sm btn-info" href="{{ route('quotations.index') }}">List</a>
        </div>
        <div class="card-body">
            <h3>Title: {{ $quotation->first()->title }}</h3>
            <p>
                <img src="{{ asset('storage/quotations/'.$quotation->first()->img) }}" alt="{{ $quotation->first()->title }}" width="100px" height="100px">
            </p>
            <p>Quotation: {{ $quotation->first()->quotation }}</p>
            <p>Author: {{ $quotation->first()->author_name }}</p>

        </div>
    </div>

</x-backend.layouts.master>