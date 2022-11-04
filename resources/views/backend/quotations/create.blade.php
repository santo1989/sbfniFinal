<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
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
            Create Quotation <a class="btn btn-sm btn-info" href="{{ route('quotations.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('quotations.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                {{-- <x-backend.form.input name="title"/>  --}}
                <label for="title">Job Description</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Job Description" required>
                <br>
                
                <x-backend.form.input name="img" type="file"/>

                <x-backend.form.textarea name="quotation" />

                <x-backend.form.input name="author_name"/>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>