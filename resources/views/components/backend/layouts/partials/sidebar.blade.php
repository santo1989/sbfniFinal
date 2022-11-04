<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            @can('admin') 
            <div class="nav">
                <div class="sb-sidenav-menu-heading">List</div>
                {{--fronend management--}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#website-controller" aria-expanded="false" aria-controls="website-controller">
                    <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>
                    Website Controller
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="website-controller" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('notices.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Notice
                        </a>
                        <a class="nav-link" href="{{ route('events.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Events
                        </a>
                        <a class="nav-link" href="{{ route('news.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            News
                        </a>
                        <a class="nav-link" href="{{ route('quotations.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Quotation
                        </a>
                        <a class="nav-link" href="{{ route('internship.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Internship
                        </a>
                        <a class="nav-link" href="{{ route('scholarship.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Scholarship
                        </a>
                        <a class="nav-link" href="{{ route('ranking.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Ranking
                        </a>
                        <a class="nav-link" href="{{ route('alumni.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Alumni
                        </a>
                        <a class="nav-link" href="{{ route('fileupload.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Downloadable FileUpload
                        </a>
                    </nav>
                </div>

                {{--frontend management end--}}

                {{--Academic Information--}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#academic-information" aria-expanded="false" aria-controls="academic-information">
                    <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                    Academic Info
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="academic-information" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('teachers.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Teachers
                        </a>
                        <a class="nav-link" href="{{ route('course.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Courses
                        </a>
                        
                    </nav>
                </div>

                {{--Academic Information end--}}

                {{--Yearly Updates--}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#yearly-updates" aria-expanded="false" aria-controls="yearly-updates">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                    Yearly Updates
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="yearly-updates" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('year.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Yearwise Students
                        </a>

                        <a class="nav-link" href="{{ route('current_courses.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-ellipsis-h"></i></div>
                            Current Courses
                        </a>                        
                    </nav>
                </div>

                {{--Yearly Updates--}}

                
                
                

                

                

                <a class="nav-link" href="{{ route('year.students') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-poll"></i></div>
                    Upload Result
                </a>

                
                <a class="nav-link" href="{{ route('teacher.evaluation.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                   Teacher Evaluation
                </a>


                
                
{{-- 
                <a class="nav-link" href="{{ route('markdestribution.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Mark Destribution
                </a>
                
                <a class="nav-link" href="{{ route('markinput.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Mark Input
                </a>
                <a class="nav-link" href="{{ route('exam.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Exam
                </a>
                <a class="nav-link" href="{{ route('gradecategory.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Grade Description
                </a>
                <a class="nav-link" href="{{ route('grade.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Grade Input
                </a> --}}

                


                {{--@can('user-management')--}}

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    User Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('roles.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Role
                        </a>
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Users
                        </a>
                    </nav>
                </div>
                {{--@endcan--}}

            </div>
            @endcan

            @can('student') 
            <div class="nav">
                <div class="sb-sidenav-menu-heading">List</div>
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Profile
                </a>
                {{--<a class="nav-link" href="{{ route('student.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Student Registration
                </a>--}}
                <a class="nav-link" href="{{ route('course_registration.create') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Course Registration
                </a>
                <a class="nav-link" href="{{ route('result.showresults', ['student_id' => auth()->user()->id]) }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Show Result
                </a>

                <a class="nav-link" href="{{ route('teacher.evaluation.show', ['student_id' => auth()->user()->id, 'year'=>date('Y')]) }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Teacher Evaluation
                </a>

            </div>
            @endcan
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
           {{ auth()->user()->role->name ?? "" }}
        </div>
    </nav>
</div>