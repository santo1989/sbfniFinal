<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
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
            Create Notice <a class="btn btn-sm btn-info" href="{{ route('notices.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('notices.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <x-backend.form.input name="title"/> 
                
                <x-backend.form.input name="date" type="date"/>

                <x-backend.form.input name="pdf" type="file"/>

                 <x-backend.form.textarea name="subject" />

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>