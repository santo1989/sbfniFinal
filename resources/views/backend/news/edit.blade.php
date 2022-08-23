<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> News </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('news.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit News <a class="btn btn-sm btn-info" href="{{ route('news.index') }}">List</a>
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

            <form action="{{ route('news.update', ['news' => $single_news->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <x-backend.form.input name="title" type="text" :value="$single_news->title"/>

                <x-backend.form.input name="img1" type="file" :value="$single_news->img1"/>

                <x-backend.form.textarea name="script1" >
                    {{ $single_news->script1 }}
                </x-backend.form.textarea>

                <x-backend.form.input name="img2" type="file" :value="$single_news->img2"/>

                <x-backend.form.textarea name="script2" >
                    {{ $single_news->script1 }}
                </x-backend.form.textarea>


                <x-backend.form.input name="gl_img1" type="file" :value="$single_news->gl_img1"/>

                <x-backend.form.input name="gl_img2" type="file" :value="$single_news->gl_img2"/>

                <x-backend.form.input name="gl_img3" type="file" :value="$single_news->gl_img3"/>

                <x-backend.form.input name="gl_img4" type="file" :value="$single_news->gl_img4"/>

                <x-backend.form.input name="gl_img5" type="file" :value="$single_news->gl_img5"/>

                <x-backend.form.input name="gl_img6" type="file" :value="$single_news->gl_img6"/>

                <x-backend.form.input name="author" type="text" :value="$single_news->author"/>

                <x-backend.form.textarea name="author_details" :value="$single_news->author_details"/>

                <x-backend.form.input name="author_img" type="file" :value="$single_news->author_img"/>
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>