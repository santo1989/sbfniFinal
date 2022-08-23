<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Ranking </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('ranking.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Ranking <a class="btn btn-sm btn-info" href="{{ route('ranking.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('ranking.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-backend.form.input name="rank_position" type="number"/>

                <x-backend.form.input name="rank_name" type="text"/>

                <x-backend.form.input name="rank_description" type="textarea"/> 
                
                <x-backend.form.input name="rank_year" type="year"/>

                

                <x-backend.form.input name="img" type="file"/>

                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>