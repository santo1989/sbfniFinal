<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Notices </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('notices.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Notice <a class="btn btn-sm btn-info" href="{{ route('notices.index') }}">List</a>
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

            <form action="{{ route('notices.update', ['notice' => $notice->first()->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="title" :value="$notice->first()->title" /> 
                    
                <x-backend.form.input name="date" type="date" :value="$notice->first()->date" /> 

        	    <x-backend.form.input name="pdf" type="file" :value="$notice->first()->image"/>  

                <x-backend.form.textarea name="subject">
                {{ $notice->first()->subject }}
                </x-backend.form.textarea>

                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>