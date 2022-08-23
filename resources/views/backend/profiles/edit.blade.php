<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> profile </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('profiles.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Profile ID <a class="btn btn-sm btn-info" href="{{ route('profiles.index') }}">List</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('profiles.update', ['profile' => $edit_profile->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="user_id" value={{ auth()->user()->id }}>
               <x-backend.form.input name="full_name" :value="$edit_profile->full_name"/>
                <x-backend.form.input name="phone" :value="$edit_profile->phone"/>
                <x-backend.form.input name="address" :value="$edit_profile->address"/>
                <x-backend.form.input name="session" :value="$edit_profile->session"/>
                <x-backend.form.input name="course_name" :value="$edit_profile->course_name"/>
                <x-backend.form.input name="current_status" :value="$edit_profile->current_status"/>
                <x-backend.form.input name="result" :value="$edit_profile->result"/>
                <x-backend.form.input name="nid" :value="$edit_profile->nid"/>
                <x-backend.form.input name="dob" type="date" :value="$edit_profile->dob"/>
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
                <x-backend.form.input name="father_name" :value="$edit_profile->father_name"/>
                <x-backend.form.input name="mother_name" :value="$edit_profile->mother_name"/>
                <x-backend.form.input name="father_phone" :value="$edit_profile->father_phone"/>
                <x-backend.form.input name="parent_address" :value="$edit_profile->parent_address"/>
                <x-backend.form.input name="current_year" :value="$edit_profile->current_year"/>
                <x-backend.form.input name="current_semester" :value="$edit_profile->current_semester"/>
                <x-backend.form.input name="student_id" :value="$edit_profile->student_id"/>
                <x-backend.form.input name="image" type="file"/>

                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>