<x-backend.layouts.master>
    <x-slot name="pageTitle">
        News
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> News </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('news.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">News</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            News
            <a class="btn btn-sm btn-danger" href="{{ route('news.trashed') }}">Trashed List</a>

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('news.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('news.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Author Details</th>
                        <th>Author Image</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($news as $news)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $news->title }}</td>
                        
                        <td>{{ $news->author }}</td>

                        <td>{{ $news->author_details }}</td>
                        
                        <td>
                            <img src="{{ asset('storage/news/'.$news->author_img) }}" alt="" width="100px">
                        </td>                        
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('news.show', ['news' => $news->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('news.edit', ['news' => $news->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('news.destroy', ['news' => $news->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('news.destroy', ['news' => $news->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- {{ $news->links() }} --}}
        </div>
    </div>

</x-backend.layouts.master>