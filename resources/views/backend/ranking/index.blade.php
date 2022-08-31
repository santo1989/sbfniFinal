<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Ranking
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Ranking </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('ranking.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Ranking</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Ranking

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('ranking.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('ranking.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Ranking Position</th>
                        <th>Ranking Name</th>
                        <th>Ranking Description </th>
                        <th>Ranking year</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($rankings as $ranking)
                    <tr>
                        <td>{{ ++$sl }}</td>

                        <td>{{ $ranking->rank_position }}</td>
                       
                        <td>{{ $ranking->name }}</td>
                        
                        <td>{{ $ranking->rank_description}}</td>

                        <td>{{ $ranking->rank_year }}</td>

                        <td>
                            <img src="{{ asset('storage/ranking/'.$ranking->img) }}" alt="{{ $ranking->img }}" width="100px" height="100px">
                        </td>
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('ranking.show', ['ranking' => $ranking->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('ranking.edit', ['ranking' => $ranking->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('ranking.destroy', ['ranking' => $ranking->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('ranking.destroy', ['ranking' => $ranking->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $rankings->links() }} --}}
        </div>
    </div>

</x-backend.layouts.master>