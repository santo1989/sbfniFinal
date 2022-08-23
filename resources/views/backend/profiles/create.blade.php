<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
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
            Create Profile ID <a class="btn btn-sm btn-info" href="{{ route('profiles.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('profiles.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <input type="hidden" name="user_id" value={{ auth()->user()->id }}>
                <x-backend.form.input name="full_name"/>
                <x-backend.form.input name="phone"/>
                <x-backend.form.input name="address"/>
                <x-backend.form.input name="session"/>
                <x-backend.form.input name="course_name"/>
                <x-backend.form.input name="current_status"/>
                <x-backend.form.input name="result"/>
                <x-backend.form.input name="nid"/>
                <x-backend.form.input name="dob" type="date"/>
                <select class="form-select mb-2" name="gender" id="" aria-label="Gender">
                    <option value="">Select One</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Other</option>
                </select>
                <select class="form-select mb-2" name="blood_group" id="" aria-label="Blood Group">
                    <option value="">Select One</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
                <select class="form-select mb-2" name="marital_status" id="" aria-label="Marital Status">
                    <option value="">Select One</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
                <x-backend.form.input name="father_name"/>
                <x-backend.form.input name="mother_name"/>
                <x-backend.form.input name="father_phone"/>
                <x-backend.form.input name="parent_address"/>
                <x-backend.form.input name="current_year"/>
                <x-backend.form.input name="current_semester"/>
                <x-backend.form.input name="student_id"/>
                <x-backend.form.input name="image" type="file"/>
                
                
                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>