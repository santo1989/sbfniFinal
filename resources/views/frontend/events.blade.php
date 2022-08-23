<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block" style="color:yellow;">Event Page</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li style="color:yellow;">Events</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell-wide">
        <div class="range range-50 range-xs-center range-xl-left">
        @forelse ( $event as $event )
        <div class="cell-sm-6 cell-md-5 cell-xl-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img class="img-responsive" src="{{ 'storage/events/' . $event->img1 }}" alt="" style="height:420px; width:420px;" />
              <div class="post-event-overlay context-dark">
                
                <div class="offset-top-20">
                  <a class="btn btn-default" href="{{ route('event_details', ['id'=>$event->id]) }}">More Details</a>
                </div>
              </div>
              <div class="post-event-meta text-center" style="background-color:#336699;">
                <div class="h3 text-bold reveal-inline-block reveal-lg-block">
                  {{ date("d", strtotime($event->date)) }}
                </div>
                <p class="reveal-inline-block reveal-lg-block">{{ date("F", strtotime($event->date)) }}</p>
                <span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">{{ date('h:i A', strtotime($event->time)) }}</span>
              </div>
            </div>
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6><b>
                      <a href="{{ route('event_details', ['id'=>$event->id]) }}">{{ $event->title }}</a>
                    </b>
                  </h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle" style="color:#9ACD32;"></span><span class="inset-left-10 text-dark text-middle">{{ $event->lecturer_name }}</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        @break($loop->iteration == 4)
        @empty
        <p> No Events </p>
        @endforelse
            
        </div>
    </div>
</section>
</x-frontend.layouts.master>