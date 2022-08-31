<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Add Form
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
            Create News <a class="btn btn-sm btn-info" href="{{ route('news.index') }}">List</a>
        </div>
        <div class="card-body">

           <x-backend.layouts.elements.errors :errors="$errors"/>

            <form action="{{ route('news.store') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-backend.form.input name="title" type="text"/>

                <x-backend.form.input name="img1" type="file"/>
                
                <x-backend.form.textarea name="script1" />

                <x-backend.form.input name="img2" type="file"/>
                
                <x-backend.form.textarea name="script2" />

                <x-backend.form.input name="gl_img1" type="file"/>

                <x-backend.form.input name="gl_img2" type="file"/>

                <x-backend.form.input name="gl_img3" type="file"/>

                <x-backend.form.input name="gl_img4" type="file"/>

                <x-backend.form.input name="gl_img5" type="file"/>

                <x-backend.form.input name="gl_img6" type="file"/>

                <x-backend.form.input name="author" type="text"/>

                <x-backend.form.textarea name="author_details" />

                <x-backend.form.input name="author_img" type="file"/>



                <x-backend.form.button>Save</x-backend.form.button>
            </form>
        </div>
    </div>


</x-backend.layouts.master>