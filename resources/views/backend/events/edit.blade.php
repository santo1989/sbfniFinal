<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Events </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('events.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Events <a class="btn btn-sm btn-info" href="{{ route('events.index') }}">List</a>
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

            <form action="{{ route('events.update', ['event_id' => $single_event->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')


                <x-backend.form.input name="title" type="text" :value="$single_event->title"/>

                <x-backend.form.input name="img1" type="file" :value="$single_event->img1"/>
                
                <x-backend.form.textarea name="description" >
                {{ $single_event->description }}
                </x-backend.form.textarea>

                <x-backend.form.input name="date" type="date" :value="$single_event->date"/>

                <x-backend.form.input name="time" type="time" :value="$single_event->time"/>
                
                <x-backend.form.input name="fee" type="number" :value="$single_event->fee"/>

                <x-backend.form.input name="location" :value="$single_event->location"/>

                <x-backend.form.textarea name="bring"  >
                {{ $single_event->bring }}
                 </x-backend.form.textarea>
 
                 <x-backend.form.input name="lecturer_name" :value="$single_event->lecturer_name"/>

                <x-backend.form.input name="lecturer_phone" :value="$single_event->lecturer_phone"/>

                <x-backend.form.input name="lecturer_email" type="email" :value="$single_event->lecturer_email"/>

                <x-backend.form.input name="lecturer_img" type="file" :value="$single_event->lecturer_img"/>

                <x-backend.form.textarea name="lecturer_description">
                {{ $single_event->lecturer_description }}
                  </x-backend.form.textarea>

                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>