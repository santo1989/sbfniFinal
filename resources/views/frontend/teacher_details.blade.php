<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block" style="color:yellow;">Teacher's Profile</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li style="color:yellow;">Teacher's Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-30 range-xs-center">
                    <div class="cell-sm-4 text-sm-left">
                        <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{ asset('storage/teachers/'.$teacher->img  ) }}" width="340" height="340" alt="">
                            <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="#" style="max-width: 340px; margin-left:auto; margin-right:auto">Get in Touch</a></div>
                        </div>
                    </div>
              {{--{{  App\Models\Teacher::where('id', $teachers)->first() }}--}}
                    <div class="cell-sm-8 text-left">
                        <div>
                            <h3 class="text-bold">{{ $teacher->name }}</h3>
                        </div>
                        <p class="offset-top-10">{{ $teacher->designation }}</p>
                        <div class="offset-top-15 offset-sm-top-30">
                            <hr class="divider bg-madison hr-left-0">
                        </div>
                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">About {{ $teacher->name }}</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <p>{{ $teacher->name }} joined the SBF Nursing Institute as an {{ $teacher->designation }}. {{ $teacher->description }}</p>
                        </div>
                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Qualification</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <p>{{ $teacher->qualification }}</p>
                        </div>

                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Contact</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                        <ul class="list list-unstyled">
                                <li><span class="icon novi-icon icon-xs mdi mdi-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#">{{$teacher->phone }}</a></li>
                                <li><span class="icon novi-icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="mailto:{{$teacher->email }}">{{$teacher->email }}</a></li>
                            </ul>
                        </div>
                       
                        {{-- <div class="offset-top-15 offset-sm-top-30">
                            <ul class="list-inline list-inline-xs list-inline-madison">
                                <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                                <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                                <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                                <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-madison context-dark">
            <div class="shell">
                <h2 class="text-bold">Skills</h2>
                <hr class="divider bg-madison">
                <div class="range range-xs-center offset-top-65">
                    <div class="cell-xs-10 cell-sm-6">
                        <div class="progress-linear-wrap">
                            <div class="progress-linear" data-to="70">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Knowledge</h6>
                                    </div><span class="text-bold pull-right">{{ $teacher->knowledge }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width:<?php echo $teacher->knowledge ?>%"></div>
                                </div>
                            </div>
                            <div class="progress-linear" data-to="42">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Experience</h6>
                                    </div><span class="text-bold pull-right">{{ $teacher->experience }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width:<?php echo $teacher->experience ?>%"></div>
                                </div>
                            </div>
                            <div class="progress-linear" data-to="38">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Communication</h6>
                                    </div><span class="text-bold pull-right">{{ $teacher->communication }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width:<?php echo $teacher->communication ?>%"></div>
                                </div>
                            </div>
                            <div class="progress-linear" data-to="94">
                                <div class="progress-header clearfix">
                                    <div class="text-left">
                                        <h6 class="text-bold pull-left text-black">Leadership</h6>
                                    </div><span class="text-bold pull-right">{{ $teacher->leadership }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width:<?php echo $teacher->leadership ?>%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
</x-frontend.layouts.master>