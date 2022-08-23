<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Edit Form
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Year Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Year Input <a class="btn btn-sm btn-info" href="{{ route('year.index') }}">List</a>
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

            <form action="{{ route('year.update', ['year' => $single_year->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="student_id">Select student</label>
                    <select name="student_id" class="form-control" id="student_id" >
                        
                        <option value="">Select Year</option>
                        @foreach($students as $student)
                        <option value="{{ $student->id }}" {{ $single_year->student_id == $student->id ? 'selected' : '' }}>{{ $student->name }} ({{ $student->reg_num ? $student->reg_num : $student->roll_num }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="course_year">Select Course Year</label>
                    <select name="course_year" class="form-control" id="course_year">
                        <option value="">Select Course</option>
                        
                            <option value="1st" {{ $single_year->course_year == '1st' ? 'selected' : '' }}>1st Year</option>
                            <option value="2md" {{ $single_year->course_year == '2md' ? 'selected' : '' }}>2nd Year</option>
                            <option value="3rd" {{ $single_year->course_year == '3rd' ? 'selected' : '' }}>3rd Year</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="section">Select Section</label>
                    <select name="section" class="form-control" id="section">
                        <option value="">Select Section</option>
                        
                            {{-- <option value="A">A</option> --}}
                            <script>
                                var section = ['A','B','C','D','E'];
                                for(var i = 0; i < section.length; i++){
                                    document.write("<option value='"+section[i]+"'>"+section[i]+"</option>");
                                }
                            </script>

                        </select>
                    </div>

                <label for="year">Select Year</label>
                <select name="year" class="form-control" id="year">
                    <option value="">Select Year</option>
                   
                        {{-- <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>    
                        <option value="2019">2019</option>              --}}
                    <script>
                        var d = new Date();
                        var n = d.getFullYear();
                        var i = n;
                        for(i = n+1; i > n-10; i--){
                            document.write("<option value='"+i+"'>"+i+"</option>");
                        }
                    </script>
                </select>

                
                
                <x-backend.form.button>Update</x-backend.form.button>

            </form>
        </div>
    </div>


</x-backend.layouts.master>