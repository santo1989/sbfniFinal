<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Profiles
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Profiles </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('profiles.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Profiles</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Profiles
            <a class="btn btn-sm btn-danger" href="{{ route('profiles.trashed') }}">Trashed List</a>

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('profiles.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('profiles.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Full Name</th>
                        <th>Student Id</th>
                        <th>Image</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($profiles as $profile)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{$profile->full_name }}</td>
                        <td>{{$profile->student_id }}</td>
                        <td>
                            <img src="{{ asset('storage/profiles/'.$profile->image) }}" alt="{{$profile->name }}" width="100px" height="100px">
                        </td>
                        <td>{{$profile->phone }}</td>
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('profiles.show', ['profile' =>$profile->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('profiles.edit', ['profile' =>$profile->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('profiles.destroy', ['profile' =>$profile->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('profiles.destroy', ['profile' =>$profile->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{--{{ $profiles->links() }}--}}
        </div>
    </div>

</x-backend.layouts.master>