<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> News </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('news.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           News Details <a class="btn btn-sm btn-info" href="{{ route('news.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Image 1 : </h4><img src="{{ asset('storage/news/'.$show_news->img1) }}" alt="" widh4="100px"></p>
                <p><h4>Script 1 : </h4>{{ $show_news->script1 }}</p>
                <p><h4>Image 2 : </h4><img src="{{ asset('storage/news/'.$show_news->img2) }}" alt="" widh4="100px"></p>
                <p><h4>Script 2 : </h4>{{ $show_news->script2 }}</p>
                <p><h4>Gallary Image 1 : </h4><img src="{{ asset('storage/news/'.$show_news->gl_img1) }}" alt="" widh4="100px"></p>
                <p><h4>Gallary Image 2 : </h4><img src="{{ asset('storage/news/'.$show_news->gl_img2) }}" alt="" widh4="100px"></p>
                <p><h4>Gallary Image 3 : </h4><img src="{{ asset('storage/news/'.$show_news->gl_img3) }}" alt="" widh4="100px"></p>
                <p><h4>Gallary Image 4 : </h4><img src="{{ asset('storage/news/'.$show_news->gl_img4) }}" alt="" widh4="100px"></p>
                <p><h4>Gallary Image 5 : </h4><img src="{{ asset('storage/news/'.$show_news->gl_img5) }}" alt="" widh4="100px"></p>
                <p><h4>Gallary Image 6 : </h4><img src="{{ asset('storage/news/'.$show_news->gl_img6) }}" alt="" widh4="100px"></p>
                    

        </div>
    </div>

</x-backend.layouts.master>