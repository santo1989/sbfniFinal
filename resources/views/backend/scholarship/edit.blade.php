<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Scholarship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('scholarship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Scholarship <a class="btn btn-sm btn-info" href="{{ route('scholarship.index') }}">List</a>
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

            <form action="{{ route('scholarship.update', ['scholarship' => $single_scholarship->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="student_reg_no" type="number" value="{{ $single_scholarship->student_reg_no }}"/>

                <x-backend.form.input name="student_name" type="text" :value="$single_scholarship->scholarship_name"/>

                <x-backend.form.input name="scholarship_amount" type="number" :value="$single_scholarship->scholarship_amount"/>

                <x-backend.form.input name="scholarship_duration" type="text" :value="$single_scholarship->scholarship_duration"/>

                <x-backend.form.input name="scholarship_description" type="textarea" :value="$single_scholarship->scholarship_description"/>


                <x-backend.form.input name="scholarship_commitment" type="text" :value="$single_scholarship->scholarship_commitment"/>


                <x-backend.form.input name="doner_name" type="text" :value="$single_scholarship->doner_name"/>

                <select name="year" class="form-control">
                    <option value="">Select Year</option>
                    <option value="1" {{ $single_scholarship->year == 1 ? 'selected' : '' }}>1st Year</option>
                    <option value="2" {{ $single_scholarship->year == 2 ? 'selected' : '' }}>2nd Year</option>
                    <option value="3" {{ $single_scholarship->year == 3 ? 'selected' : '' }}>3rd Year</option>
                    <option value="4" {{ $single_scholarship->year == 4 ? 'selected' : '' }}>4th Year</option>
                </select>



                <select name="scholarship_status" id="scholarship_status">
                    <option value="">Select Status</option>
                    <option value="1" {{ $single_scholarship->scholarship_status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $single_scholarship->scholarship_status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
                

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>