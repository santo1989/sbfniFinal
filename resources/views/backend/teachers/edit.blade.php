<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Teachers </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('teachers.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Teacher ID <a class="btn btn-sm btn-info" href="{{ route('teachers.index') }}">List</a>
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

            <form action="{{ route('teachers.update', ['teacher' => $teacher->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <x-backend.form.input name="name" :value="$teacher->name"/> 
                <x-backend.form.input name="designation" :value="$teacher->designation"/>
                <x-backend.form.input name="qualification" :value="$teacher->qualification"/>
                <x-backend.form.textarea name="description"> 
                    {{  $teacher->description}}
                </x-backend.form.textarea>"
                <x-backend.form.input name="email" :value="$teacher->email"/>
                <x-backend.form.input name="phone" :value="$teacher->phone"/>
                <x-backend.form.input name="knowledge" :value="$teacher->knowledge"/> 
                <x-backend.form.input name="experience" :value="$teacher->experience"/> 
                <x-backend.form.input name="communication" :value="$teacher->communication"/> 
                <x-backend.form.input name="leadership" :value="$teacher->leadership"/> 
                <x-backend.form.input name="img" type="file" :value="$teacher->img"/>

                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>