<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Details
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Ranking </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('ranking.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
           Ranking Details <a class="btn btn-sm btn-info" href="{{ route('ranking.index') }}">List</a>
        </div>
        <div class="card-body">
                <p><h4>Ranking Name  : </h4>{{ $show_ranking->rank_name }}</p>
                <p><h4>Current Position  : </h4>{{ $show_ranking->rank_description }}</p>
                <p><h4>Ranking Year  : </h4>{{ $show_ranking->rank_year }}</p>
                <p><h4>Ranking Position  : </h4>{{ $show_ranking->rank_position }}</p>
                <p><h4>Image  : </h4><img src="{{ asset('storage/ranking/'.$show_ranking->img) }}" alt="{{ $show_ranking->img }}"></p>

        </div>
    </div>

</x-backend.layouts.master>