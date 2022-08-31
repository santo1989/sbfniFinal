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
            Notices <a class="btn btn-sm btn-info" href="{{ route('notices.index') }}">List</a>
        </div>
        <div class="card-body">

            @if (session('message'))
            <div class="alert alert-success">
                <span class="close" data-dismiss="alert">&times;</span>
                <strong>{{ session('message') }}.</strong>
            </div>
            @endif

            <table id="datatablesSimple">
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
                        
                            <a class="btn btn-warning btn-sm" href="{{ route('notices.restore', ['notice' => $notice->id]) }}" >Restore</a>

                            <form style="display:inline" action="{{ route('notices.delete', ['notice' => $notice->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                
                                <button onclick="return confirm('Are you sure want to delete permanently?')" class="btn btn-sm btn-danger" type="submit">Permanent Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</x-backend.layouts.master>