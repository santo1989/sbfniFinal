<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Section
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Section </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('section.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Section</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4" style="width:fit-content">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Section

            {{-- @can('create-category') --}}
            <a class="btn btn-sm btn-info" href="{{ route('section.create') }}">Add New</a>
            {{-- @endcan --}}

        </div>
        <div class="card-body">

            <x-backend.layouts.elements.message :fmessage="session('message')" />

            <!-- <table id="datatablesSimple"> -->
            <form method="GET" action="{{ route('section.index') }}">
                <x-backend.form.input style="width: 200px;" name='search' />

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl#</th>
                        <th>Section Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach ($sections as $section)
                    <tr>
                        <td>{{ ++$sl }}</td>
                       
                        <td>{{ $section->section_name }}</td>                    
                        
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('section.show', ['section' => $section->id]) }}">Show</a>

                            <a class="btn btn-warning btn-sm" href="{{ route('section.edit', ['section' => $section->id]) }}">Edit</a>

                            <form style="display:inline" action="{{ route('section.destroy', ['section' => $section->id]) }}" method="post">
                                @csrf
                                @method('delete')

                                <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                            {{-- <!-- <a href="{{ route('section.destroy', ['section' => $section->id]) }}" >Delete</a> --> --}}


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $sections->links() }}
        </div>
    </div>

</x-backend.layouts.master>