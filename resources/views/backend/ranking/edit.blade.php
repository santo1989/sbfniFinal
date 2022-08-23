<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Ranking </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('ranking.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Ranking <a class="btn btn-sm btn-info" href="{{ route('ranking.index') }}">List</a>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('ranking.update', ['ranking' => $single_ranking->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="rank_position" type="number" value="{{ $single_ranking->rank_position }}"/>

                <x-backend.form.input name="rank_name" type="text" :value="$single_ranking->rank_name"/>

                <x-backend.form.input name="rank_description" type="textarea" :value="$single_ranking->rank_description"/>

                <x-backend.form.input name="rank_year" type="year" :value="$single_ranking->rank_year"/>

                <x-backend.form.input name="img" type="file" :value="$single_ranking->img"/>
                

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>