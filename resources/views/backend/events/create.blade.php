<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Events </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('events.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Events <a class="btn btn-sm btn-info" href="{{ route('events.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('events.store') }}" enctype="multipart/form-data" method="post">
                @csrf


                <x-backend.form.input name="title" type="text"/>

                <x-backend.form.input name="img1" type="file"/>
                
                <x-backend.form.textarea name="description" />

                <x-backend.form.input name="date" type="date"/>

                <x-backend.form.input name="time" type="time"/>
                
                <x-backend.form.input name="fee" type="number"/>

                <x-backend.form.input name="location" type="text"/>

                <x-backend.form.textarea name="bring" />

                <x-backend.form.input name="lecturer_name"/>

                <x-backend.form.input name="lecturer_phone"/>

                <x-backend.form.input name="lecturer_email" type="email"/>

                <x-backend.form.input name="lecturer_img" type="file"/>

                <x-backend.form.textarea name="lecturer_description"/>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>