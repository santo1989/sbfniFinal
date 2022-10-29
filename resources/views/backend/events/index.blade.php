<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Events
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Events </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('events.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Events</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card" style="width:100%" >
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Events
            <a class="btn btn-sm btn-danger" href="{{ route('events.trashed') }}">Trashed List</a>

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('events.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body " >

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('events.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table ">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>What to Bring</th>
                        <th>Date</th>
                        <th>Lecturer Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ ++$sl }}</td>

                        <td>{{ $event->title }}</td>

                        <td>
                            <img src="{{ asset('storage/events/'.$event->img1) }}" alt="{{ $event->img1 }}" width="100px" height="100px">
                        </td>

                        <td>{{ $event->bring }}</td>


                        <td>{{ $event->location }}</td>

                        <td>{{ $event->lecturer_name }}</td>

                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('events.show', ['event' => $event->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('events.edit', ['event_id' => $event->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('events.destroy', ['event' => $event->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('events.destroy', ['events' => $events->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $events->links() }} --}}
        </div>
    </div>

</x-backend.layouts.master>