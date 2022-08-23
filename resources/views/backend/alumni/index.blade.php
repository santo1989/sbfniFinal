<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Alumni
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Alumni </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('alumni.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Alumni</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Alumni

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('alumni.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('alumni.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Student Reg. No</th>
                        <th>Alumni Name</th>
                        <th>Current Position</th>
                        <th>Alumni Address</th>
                        <th>Batch</th>
                        <th>Alumni Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($alumnis as $alumni)
                    <tr>
                        <td>{{ ++$sl }}</td>

                        <td>{{ $alumni->student_reg_no }}</td>
                       
                        <td>{{ $alumni->name }}</td>
                        
                        <td>{{ $alumni->current_position}}</td>

                        <td>{{ $alumni->address }}</td>

                        <td>{{ $alumni->passing_year }}</td>

                        <td>{{ $alumni->alumni_role }}</td>

                        <td>
                            <img src="{{ asset('storage/alumni/'.$alumni->img) }}" alt="{{ $alumni->img }}" width="100px" height="100px">
                        </td>
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('alumni.show', ['alumnus' => $alumni->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('alumni.edit', ['alumnus' => $alumni->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('alumni.destroy', ['alumnus' => $alumni->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('alumni.destroy', ['alumni' => $alumni->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $alumnis->links() }} --}}
        </div>
    </div>

</x-backend.layouts.master>