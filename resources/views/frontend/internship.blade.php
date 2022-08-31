<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block" style="color:yellow;">Internship</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li style="color:yellow;">Intern Students List</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div style="height:20px;">
</div>
    <div class="container ">
        <div class="row my-5 ">
          <div class="col-lg-12">
            <div class="card shadow">
              <div class="card-header p-3 mb-2 bg-info bg-gradient text-dark d-flex justify-content-between align-items-center">
                <h3 class="page-headings">Intern, Job placement Students List</h3>
              </div>
              <div class="card-body" id="show_all_students">
                <table class="table table-striped table-sm text-center align-middle">
                    <thead>
                      <tr>
                        <th>Reg No</th>
                        {{-- <th>Image</th> --}}
                        <th>Student Name</th>
                        <th>Current Position</th>
                        <th>Job Address</th>
                        <th>Passing Year</th>
                        <th>Internship / Job Start Date</th>
                        <th>Internship / Job Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse ( $internships as $internship )
                        
                   {{-- { --}}
                        <tr>
                        <td>{{ $internship->student_reg_no }} </td>
                        {{-- <td> --}}
                           {{-- @php
                          $img =App\Models\Profile::where('student_reg_no',$internship->student_reg_no)->first()->image;
                        @endphp --}}
                          {{-- <img src="{{ asset('storage/profiles/1651953955.png') }}" width="50" class="img-thumbnail rounded-circle"></td> --}}
                        {{-- <td><i class="fa fa-image" aria-hidden="true"></i></td> --}}
                        <td>{{ $internship->name }} </td>
                        <td>{{ $internship->current_position }}</td>

                        <td>{{ $internship->address }}</td>

                        <td>{{ $internship->passing_year }}</td>

                        <td>{{ $internship->internship_start_date }}</td>

                        <td>{{ $internship->internship_role == 1 ? 'Active' : 'Inactive' }}</td>
                      </tr>
                    {{-- } --}}
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No Student Found</td>
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