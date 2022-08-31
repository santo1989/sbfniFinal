<x-backend.layouts.master>
    @php $date = date('Y'); @endphp
    
    

    <x-slot name="pageTitle">
        Current Courses
    </x-slot>

    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Course Registration </x-slot>

            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Course Registration</li>

        </x-backend.layouts.elements.breadcrumb>

    </x-slot>
    

    <div class="row ps-2 pe-2">
            <div class="col-md-8" id="table-spreid">
            <table class="table table-dark table-striped" id="table-spreid">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Teacher</th>
                    <th scope="col">Year</th>
                    <th scope="col">Course Year</th>
                    </tr>
                </thead>
                <tbody id="tableD">
                    @php $i = 1; @endphp
                    @foreach($courses as $course)
                    <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{ $course->mycurrentcourse->course->course_name }}</td>
                    <td>{{ $course->mycurrentcourse->teacher->name }}</td>
                    <td>{{ $course->year }}</td>
                    <td>{{ $course->course_year }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="col-md-4" id="listdiv">
            
                {{-- </div> --}}
            <ul class="list-group">
                @if($courses->count() == 0)

                
                @foreach($currentcourseslist as $currentcourse)
                        
                        <li class="list-group-item"><div class="d-flex justify-content-between"><div>{{ $currentcourse->course->course_name }} (Teacher: {{ $currentcourse->teacher->name }})</div> <a href="{{ route('course-registration-store', ['course_id'=> $currentcourse->id, 'student_id'=>auth()->user()->id, 'year'=>date("Y") ]) }}" class="btn btn-primary">ADD</a></div></li>
                        
                    
                
                @endforeach
                @else
                
                @foreach($currentcourseslist as $currentcourse)
                        
                        <li class="list-group-item"><div class="d-flex justify-content-between"><div>{{ $currentcourse->course->course_name }} (Teacher: {{ $currentcourse->teacher->name }})</div> <a href="#" class="btn btn-success"></a></div></li>
                @endforeach


                {{-- <script>
                    document.getElementById('listdiv').style.display = 'none';
                    document.getElementById("table-spreid").setAttribute("class", "col-md-12");
                </script> --}}
                @endif
                
            </ul>
            </div>
        </div>

        
            <script>
                // function check(value)
                // {
                //     alert(value);
                // }
                // function hello(course_id, student_id) {
                //     var tableHeaderRowCount = 1;
                //         var table = document.getElementById('tableD');
                //         var rowCount = table.rows.length;
                //         for (var i = tableHeaderRowCount; i < rowCount; i++) {
                //             table.deleteRow(tableHeaderRowCount);
                //         }
                   
                //     const year = document.getElementById('year').value;
                //     const course_year = document.getElementById('course_year').value;
                //     fetch(`http://127.0.0.1/api/admin/course_registration/store/${course_id}/${student_id}/${year}/${course_year}`)
                //     .then(response => console.log(response))
                   

                   
                // }
            </script>
       <script>
        $(document).ready(function(){
          $("#year").datepicker({
             format: "yyyy",
             viewMode: "years", 
             minViewMode: "years",
             autoclose:true
          });   
        })
        
        
        </script>
</x-backend.layouts.master>