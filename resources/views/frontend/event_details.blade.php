<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block" style="color:yellow;">Event Details</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li style="color:yellow;">Event page</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <div class="range range-50 range-xs-center">
                <div class="cell-sm-6 text-left">
                    <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{ asset('storage/events/'.$newevent->img1) }}" width="540" height="540" alt="">
                        <div class="offset-top-30 offset-sm-top-60">
                            <h6 class="page-para " style="padding:20px 10px;">A Few Words About Lecturer</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20 text-left text-xs-left"  style="padding:20px 10px;">
                            <div class="unit unit-xs unit-xs-horizontal unit-spacing-lg">
                                <div class="unit-left"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('storage/events/'.$newevent->lecturer_img  ) }}" width="110" height="110" alt=""></div>
                                <div class="unit-body" >
                                    
                                    <h6 class="page-para text-primary">{{ $newevent->lecturer_name }}</a></h6>
                                    
                                    <div class="offset-sm-top-30">
                                        <ul class="list list-unstyled">
                                            <li><span class="icon novi-icon icon-xs mdi mdi-phone text-middle"></span><a class="reveal-inline-block text-black inset-left-10" href="tel:{{ $newevent->lecturer_phone }}">{{ $newevent->lecturer_phone }}</a></li>
                                            <li><span class="icon novi-icon icon-xs mdi mdi-email-outline text-middle"></span><a class="reveal-inline-block inset-left-10" href="mailto:{{ $newevent->lecturer_email }}">{{ $newevent->lecturer_email }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-30 offset-sm-top-60" style="padding:20px 10px;">
                                {{-- <h6 class="text-bold">A few word about the Lecturer</h6> --}}
                                <div class="text-subline"></div>
                            </div>
                            <div class="offset-top-20">
                                <p>{{ $newevent->lecturer_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 text-left" style="padding:20px 10px;">
                    <h3 class="text-bold"><a href="#">{{ $newevent->title }}</a></h3>
                    <div class="hr divider bg-madison hr-left-0"></div>
                    <div class="offset-top-30 offset-sm-top-60">
                        <p>{{ $newevent->description }}</p>
                    </div>
                    <div class="offset-top-30 offset-sm-top-60" style="padding:20px 10px;">
                        <h6 class="page-para text-primary">When is the next workshop and how do I apply?</h6>
                        <div class="text-subline"></div>
                    </div>
                    <div class="offset-top-17">
                        <p>Details of the next available workshop are below:</p>
                        <ul class="list list-unstyled">
                            <li><span class="text-black">Date:</span><span> {{ date('d-F-Y', strtotime($newevent->date)) }}</span></li>
                            <li><span class="text-black">Times:</span><span> {{ date('h:i A', strtotime($newevent->time)) }}</span></li>
                            <li><span class="text-black">Fee:</span><span> {{ $newevent->fee}}</span></li>
                            <li><span class="text-black">Location:</span><span> {{ $newevent->location}}</span></li>
                        </ul>
                        <div class="offset-top-30 offset-sm-top-60">
                            <h6 class="text-bold">What you need to bring</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <p>{{ $newevent->bring}}</p>
                        </div>
                        {{-- <div class="offset-top-30"><a class="btn btn-primary" href="#">Apply Now</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--Other events--}}
    <section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell-wide" style="padding:20px 10px;">
                <h2 class="text-bold">Other&nbsp;Events</h2>
                <hr class="divider bg-madison">
                <div class="range range-50 offset-top-35 range-xs-center">
                    @forelse($otherEvents as $otherEvent)
                    <div class="cell-sm-6 cell-md-5 cell-xl-3">
                        <article class="post-event">
                            <div class="post-event-img-overlay"><img class="img-responsive" src="{{ asset('storage/events/'.$otherEvent->img1) }}" alt="" width="420" height="420">
                                {{-- <div class="post-event-overlay context-dark"><a class="btn btn-primary" href="#">Book Now</a> --}}
                                    <div class="offset-top-20"><a class="btn btn-default" href="{{ route('events') }}">Learn More</a></div>
                                </div>
                                <div class="post-event-meta text-center">
                                    <div class="h3 text-bold reveal-inline-block reveal-lg-block">{{ date('d', strtotime($otherEvent->date)) }}</div>
                                    <p class="reveal-inline-block reveal-lg-block">{{ date('F', strtotime($otherEvent->date)) }}</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">{{ date('h:i A', strtotime($otherEvent->time)) }}</span>
                                </div>
                            </div>
                            <div class="unit unit-lg unit-lg-horizontal">
                                <div class="unit-body">
                                    <div class="post-event-body text-lg-left">
                                        <h6><a href="{{ route('event_details', ['id'=>$otherEvent->id]) }}">{{ $otherEvent->title }}</a></h6>
                                        <ul class="list-inline list-inline-xs">
                                            <li><a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">{{ $otherEvent->lecturer_name }}</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @empty
                    <p>No events found</p>
                    @endforelse
                </div>
            </div>
        </section>
    
</x-frontend.layouts.master>