<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Internship
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Internship </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('internship.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Internship</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Internship

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('internship.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('internship.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Student Reg. No</th>
                        <th>Student  Name</th>
                        <th>Current Position</th>
                        <th>Address</th>
                        <th>Passing Year</th>
                        <th>Internship Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($internships as $internship)
                    <tr>
                        <td>{{ ++$sl }}</td>

                        <td>{{ $internship->student_reg_no }}</td>
                       
                        <td>{{ $internship->name }}</td>
                        
                        <td>{{ $internship->current_position }}</td>

                        <td>{{ $internship->address }}</td>

                        <td>{{ $internship->passing_year }}</td>

                        <td>{{ $internship->internship_start_date }}</td>

                        <td>{{ $internship->internship_role == 1 ? 'Active' : 'Inactive' }}</td>
                        
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('internship.show', ['internship' => $internship->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('internship.edit', ['internship' => $internship->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('internship.destroy', ['internship' => $internship->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('internship.destroy', ['internship' => $internship->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $internships->links() }} --}}
        </div>
    </div>

</x-backend.layouts.master>