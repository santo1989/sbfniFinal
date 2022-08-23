<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Quotations </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('quotations.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Quotation <a class="btn btn-sm btn-info" href="{{ route('quotations.index') }}">List</a>
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

            <form action="{{ route('quotations.update', ['quotation' => $quotation->first()->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <x-backend.form.input name="title" :value="$quotation->first()->title"/> 
                
                <x-backend.form.input name="img" type="file" :value="$quotation->first()->image" />

                <x-backend.form.textarea name="quotation" >
                {{ $quotation->first()->quotation }}
                </x-backend.form.textarea>

                <x-backend.form.input name="author_name" :value="$quotation->first()->author_name" />
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>