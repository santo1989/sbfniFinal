<x-frontend.layouts.master>
    <section class="section breadcrumb-modern context-dark parallax-container text-center"
        data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
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
    <div style="height:20px;">
    </div>
    <div class="container ">
        <div class="row ">
            <div class="col-12 ">
                <div class="card shadow">
                    <div class="card-header  text-center" style="background-color: #0D4933;">
                        <h3 class="page-headings text-white">Students List</h3>
                    </div>
                    <div class="card-body table-responsive" id="show_all_students">
                        <table class="table table-striped table-bordered text-center align-middle">
                            <thead>
                                <thead>
                                    <tr>
                                        <th>Sl#</th>
                                        <th>Image</th>
                                        <th>Student Reg. No</th>
                                        <th>Student Name</th>
                                        <th>Scholarship Commitment</th>
                                        {{-- <th>Scholarship Status</th> --}}
                                        <th>Doner Name</th>
                                        <th>Year</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @php $sl=0 @endphp
                                @forelse ($scholarships as $scholarship)
                                    <tr>
                                        <td>{{ ++$sl }}</td>

                                        <td>
                                            <img src="{{ asset('storage/news/' . $scholarship->image) }}"
                                                alt="{{ $scholarship->scholarship_name }}" width="100px"
                                                height="100px">
                                        </td>
                                        <td>{{ $scholarship->student_reg_no }}</td>
                                        <td>{{ $scholarship->scholarship_name }}</td>

                                        <td>{{ $scholarship->scholarship_commitment }}</td>
                                        {{-- <td>{{ $scholarship->scholarship_status }}</td> --}}
                                        <td>{{ $scholarship->doner_name }}</td>
                                        <td>{{ $scholarship->year }}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('scholarship_details', ['id' => $scholarship->id]) }}">Show
                                                Details</a>
                                        </td>


                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No Student Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend.layouts.master>
