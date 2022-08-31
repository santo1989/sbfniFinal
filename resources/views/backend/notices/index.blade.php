<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Notices
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Notices </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('notices.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Notices</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Notices
            <a class="btn btn-sm btn-danger" href="{{ route('notices.trashed') }}">Trashed List</a>

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('notices.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('notices.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>PDF</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($notices as $notice)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $notice->title }}</td>
                        <td>{{ $notice->date }}</td>
                        <td>
                            <a href="{{ asset('storage/notices/'.$notice->pdf) }}" target="_blank">
                                <i class="fas fa-file-pdf"></i>
                            </a>
                        </td>
                        <td>{{ $notice->subject }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('notices.show', ['notice' => $notice->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('notices.edit', ['notice' => $notice->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('notices.destroy', ['notice' => $notice->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('notices.destroy', ['notice' => $notice->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $notices->links() }}
        </div>
    </div>

</x-backend.layouts.master>