<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Current Courses
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Current Courses </x-slot>

            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Current Courses</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Teachers
            <a class="btn btn-sm btn-danger" href="#">Trashed List</a>

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('current_courses.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <x-backend.layouts.elements.errors :errors="$errors" />

            <!-- <table id="datatablesSimple"> -->
            {{-- <form method="GET" action="#">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form> --}}
            <table class="table table-dark table-striped" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>year</th>
                        <th>course_year</th>
                        <th>course_name</th>
                        <th>course_teacher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($currentcourses) --}}
                    @php $sl=0 @endphp
                    @foreach ($currentcourses as $currentcourse)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{$currentcourse->year }}</td>
                        <td>{{$currentcourse->course_year }}</td>
                        <td>{{$currentcourse->course->course_name }}</td>
                        <td>{{$currentcourse->teacher->name }}</td>
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('current_courses.edit',[
                                'current_course'=>$currentcourse->id
                                ]) }}">Edit</a>

                            {{-- <form action="{{ route('current_courses.destroy', $currentcourse->id) }}" method="post"
                                style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form> --}}

                            {{-- <!-- <a href="{{ route('Teachers.destroy', ['teacher' =>$teacher->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{--{{ $Teachers->links() }}--}}
        </div>
    </div>

</x-backend.layouts.master>