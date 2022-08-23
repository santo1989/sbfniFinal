<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Profiles </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('profiles.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Profile ID Details <a class="btn btn-sm btn-info" href="{{ route('profiles.index') }}">List</a>
        </div>
        <div class="card-body">                
                
                <p>full_name : <p>{{$show_profile->full_name }}</p></p>
                <p>phone : <p>{{$show_profile->phone }}</p></p>
                <p>address : <p>{{$show_profile->address }}</p></p>
                <p>session : <p>{{$show_profile->session }}</p></p>
                <p>course_name : <p>{{$show_profile->course_name }}</p></p>
                <p>current_status : <p>{{$show_profile->current_status }}</p></p>
                <p>result : <p>{{$show_profile->result }}</p></p>
                <p>nid : <p>{{$show_profile->nid }}</p></p>
                <p>dob : <p>{{$show_profile->dob }}</p></p>
                <p>gender : <p>{{$show_profile->gender }}</p></p>
                <p>blood_group : <p>{{$show_profile->blood_group }}</p></p>
                <p>marital_status : <p>{{$show_profile->marital_status }}</p></p>
                <p>father_name : <p>{{$show_profile->father_name }}</p></p>
                <p>mother_name : <p>{{$show_profile->mother_name }}</p></p>
                <p>father_phone : <p>{{$show_profile->father_phone }}</p></p>
                <p>parent_address : <p>{{$show_profile->parent_address }}</p></p>
                <p>current_year : <p>{{$show_profile->current_year }}</p></p>
                <p>current_semester : <p>{{$show_profile->current_semester }}</p></p>
                <p>student_id : <p>{{$show_profile->student_id }}</p></p>
                <p>Image : <h3>
                    <img src="{{ asset('storage/profiles/'.$show_profile->img) }}" alt="{{$show_profile->name }}" width="100px" height="100px">
                </h3></p>      
        </div>
    </div>

</x-backend.layouts.master>