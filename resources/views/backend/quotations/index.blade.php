<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Quotations
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Quotations </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('quotations.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Quotations</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Quotations
            <a class="btn btn-sm btn-danger" href="{{ route('quotations.trashed') }}">Trashed List</a>

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('quotations.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('quotations.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Quotation</th>
                        <th>Author Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($quotations as $quotation)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $quotation->title }}</td>
                        <td>
                            <img src="{{ asset('storage/quotations/'.$quotation->img) }}" alt="{{ $quotation->title }}" width="100px" height="100px">
                        </td>
                        <td>{{ $quotation->quotation }}</td>
                        <td>{{ $quotation->author_name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('quotations.show', ['quotation' => $quotation->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('quotations.edit', ['quotation' => $quotation->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('quotations.destroy', ['quotation' => $quotation->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('quotations.destroy', ['quotation' => $quotation->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{--{{ $quotations->links() }}--}}
        </div>
    </div>

</x-backend.layouts.master>