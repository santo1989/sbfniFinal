<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
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
            Create Internship <a class="btn btn-sm btn-info" href="{{ route('internship.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('internship.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-backend.form.input name="student_reg_no" type="number"/>

                <x-backend.form.input name="name" type="text"/>

                <x-backend.form.input name="current_position" type="text"/> 
                
                <x-backend.form.input name="address" type="text"/>

                <x-backend.form.input name="passing_year" type="year"/>

                <select name="internship_role" id="internship_role">
                    <option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>

                <x-backend.form.input name="internship_start_date" type="date"/>

               


                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>