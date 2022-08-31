<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block" style="color:yellow;">Scholarship</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li style="color:yellow;">Scholarship&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-70 section-md-114">
        <table id="example" class="table table-striped responsive" style="width:100%">
                                                    <thead class="page-para">
                                                        <tr>
                                                            <th>Sl#</th>
                                                            <th>Image</th>
                                                            <th>Student Reg. No</th>
                                                            <th>Student Name</th>
                                                            <th>Scholarship Commitment</th>
                                                            {{-- <th>Scholarship Status</th> --}}
                                                            <th>Doner Name</th>
                                                            <th>Year</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php $sl=0 @endphp
                                                        @foreach ($scholarships as $scholarship)
                                                        <tr>
                                                            <td>{{ ++$sl }}</td>

                                                            <td>
                                                                <img src="{{ asset('storage/news/'.$scholarship->image) }}" alt="{{ $scholarship->scholarship_name }}" width="100px" height="100px">
                                                            </td>
                                                            <td>{{ $scholarship->student_reg_no }}</td>
                                                            <td>{{ $scholarship->scholarship_name }}</td>
                            
                                                            <td>{{ $scholarship->scholarship_commitment }}</td>
                                                            {{-- <td>{{ $scholarship->scholarship_status }}</td> --}}
                                                            <td>{{ $scholarship->doner_name }}</td>
                                                            <td>{{ $scholarship->year }}</td>
                                                            <td>
                                                                <a class="btn btn-info btn-sm" href="{{   route('scholarship_details', ['id' => $scholarship->id]) }}">Show Details</a>    
                                                            </td>

                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    
                                                </table>
            
    </section>

<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

</x-frontend.layouts.master>