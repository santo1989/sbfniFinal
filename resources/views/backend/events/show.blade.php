<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
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
           Events Details <a class="btn btn-sm btn-info" href="{{ route('events.index') }}">List</a>
        </div>
        <div class="card-body">
           
                
                <p>Image : <h3>
                    <img src="{{ asset('storage/events/'.$events->img1) }}"  widp="100px" height="100px">
                </h3></p>
                <p>Description : <h3>{{ $events->description }}</h3></p>
                <p>Date :  <h3>{{ $events->date }}</h3></p>
                <p>Time : <h3>{{ $events->time }}</h3></p>
                <p>Fee : <h3>{{ $events->fee }}</h3></p>
                <p>Month : <h3>{{ $events->month }}</h3></p>
                <p>Location : <h3>{{ $events->location }}</h3></p>
                <p>Bring : <h3>{{ $events->bring }}</h3></p>
                <p>Lecturer Name : <h3>{{ $events->lecturer_name }}</h3></p>
                <p>Lecturer Phone : <h3>{{ $events->lecturer_phone }}</h3></p>
                <p>Lecturer Email :  <h3>{{ $events->lecturer_email }}</h3></p>
                <p>Lecturer Image : <h3>
                    <img src="{{ asset('storage/events/'.$events->lecturer_img) }}" alt="{{ $events->lecturer_img }}" widp="100px" height="100px">
                </h3></p>
                <p>Lecturer Description : <h3>{{ $events->lecturer_description }}</h3>
                </p>

        </div>
    </div>

</x-backend.layouts.master>