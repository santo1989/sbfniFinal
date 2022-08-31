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

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            News <a class="btn btn-sm btn-info" href="{{ route('news.index') }}">List</a>
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
                        <th>Image 1</th>
                        <th>Script 1</th>
                        <th>Image 2</th>
                        <th>Script 2</th>
                        <th>Gallary Image 1</th>
                        <th>Gallary Image 2</th>
                        <th>Gallary Image 3</th>
                        <th>Gallary Image 4</th>
                        <th>Gallary Image 5</th>
                        <th>Gallary Image 6</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($news as $news)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->img1) }}" alt="" width="100px">
                        </td>
                        <td>{{ $news->script1 }}</td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->img2) }}" alt="" width="100px">
                        </td>
                        <td>{{ $news->script2 }}</td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->gl_img1) }}" alt="" width="100px">
                        </td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->gl_img2) }}" alt="" width="100px">
                        </td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->gl_img3) }}" alt="" width="100px">
                        </td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->gl_img4) }}" alt="" width="100px">
                        </td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->gl_img5) }}" alt="" width="100px">
                        </td>
                        <td>
                            <img src="{{ asset('storage/news/'.$news->gl_img6) }}" alt="" width="100px">
                        </td>
                        
                        <td>
                        
                            <a class="btn btn-warning btn-sm" href="{{ route('news.restore', ['news' => $news->id]) }}" >Restore</a>

                            <form style="display:inline" action="{{ route('news.delete', ['news' => $news->id]) }}" method="post">
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