<x-backend.layouts.master>
    <x-slot name='breadCrumb'>
        <x-backend.layouts.elements.breadcrumb>
            <x-slot name="pageHeader"> Year Input </x-slot>

            <li class="breadcrumb-item"><a href="{{ route('year.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Year Input</li>

        </x-backend.layouts.elements.breadcrumb>
    </x-slot>

    <table class="table">
        <thead>
            <tr>
                <th>Sl#</th>
                <th>Student Name</th>
                <th>Year</th>
                <th>Course Year</th>
                <th>Section</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $sl=0 @endphp
            @foreach ($yearwisestudents as $yearwisestudent)
            <tr>
                <td>{{ ++$sl }}</td>

                <td>{{ $yearwisestudent->user->name }}</td>
                <td>{{ $yearwisestudent->year }}</td>
                <td>{{ $yearwisestudent->course_year }}</td>
                <td>{{ $yearwisestudent->section }}</td>


                <td>
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="clicked('<?/*php echo $yearwisestudent->course_year */?>', '<?/*php echo $yearwisestudent->year */?>', '<?/*php echo $yearwisestudent->user->id */?>')">Upload Result</button> --}}
                    <a href="{{ route('result_getcourses', ['course_year'=> $yearwisestudent->course_year, 'year'=>$yearwisestudent->year,'student_id'=>$yearwisestudent->user->id ]) }}" class="btn btn-primary">Upload Result</a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{--modal--}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Courses</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
        </div>
        <div class="modal-body" id="modal_body">
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })

        function getExtInfo(student_id, course_year, year){
            return [
                student_id,
                course_year,
                year
            ];
        }

        function clicked(course_year, year, student_id)
        {
            
            fetch(`http://127.0.0.1/api/admin/get-courses/${course_year}/${year}/${student_id}`)
            .then(response => response.json())
            .then((data)=> {
                console.log(data[0][0].id);
                const parent = document.getElementById('modal_body');
                
                let inside = `<input type="hidden" name="back"/>`;
                let mainInside;
                if(data[0].length > 1)
                {
                    const routeInfo = getExtInfo
                    for(let i=0; i<data[0].length; i++)
                    {
                        inside += `<label class="form-label" for="viva">${data[4][i].course_name}</label><br><input class="form-control" name="written[]" type="number" id="written" placeholder="Enter Written Mark"/><input class="form-control" name="oral[]" type="number" id="oral" placeholder="Enter Oral Mark"/>
                        <input class="form-control" name="formative[]" type="number" id="formative" placeholder="Enter formative Mark"/> 
                        <input class="form-control" name="practical[]" type="number" id="practical" placeholder="Enter practical Mark"/>   
                        <input class="form-control" name="written_pass[]" type="number" id="written_pass" placeholder="Enter Written Pass Mark"/>
                        <input class="form-control" name="formative_pass[]" type="number" id="formative_pass" placeholder="Enter Formative Pass Mark"/> 
                        <input class="form-control" name="practical_pass[]" type="number" id="practical_pass" placeholder="Enter Practical Pass Mark"/> 
                        <input class="form-control" name="oral_pass[]" type="number" id="oral_pass" placeholder="Enter Oral Pass Mark"/> 
                        <input class="form-control" name="total[]" type="number" id="total" placeholder="Enter Total Mark"/>     
                        <input class="form-control" name="grade[]" type="number" id="grade" placeholder="Enter Grade"/>   
                        <input class="form-control" type="hidden" name="course_id[]" value="${data[0][i].id}">`;
                        inside +=`<br><br>`;
                    }
                    inside += `<input type="submit" class="btn btn-primary"/>`
                    mainInside = `<form action="{{ route('result.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="student_id" value="${student_id}">
                                    <input type="hidden" name="year" value="${year}">
                                    <input type="hidden" name="course_year" value="${course_year}">
                                    
                                    ${inside}
                                </form>`
                }
                parent.innerHTML = mainInside;
            })
        }
    </script>
</x-backend.layouts.master>