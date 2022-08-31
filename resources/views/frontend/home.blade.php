<x-frontend.layouts.master>
    @yield('content')

    {{-- Slider --}}

<x-frontend.layouts.partials.slider>
</x-frontend.layouts.partials.slider>

    {{-- HISTORY --}}
        <section
            class="section novi-background bg-cover section-70 section-md-114 bg-default"
          >
            <div class="shell">
              <div class="range range-50">
                <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
                  <div class="inset-sm-left-50">
                    <img
                      class="img-responsive reveal-inline-block img-rounded"
                      src="{{ asset('ui/frontend/images/SBF_AKB.png') }}"
                      alt=""
                      width="340"
                      height="300"
                    />
                    <div class="offset-top-20">
                      <h6 class="text-primary text-bold">Amrit Kumar Barman</h6>
                    </div>
                    <p>
                      Principal (Acting), SBFI, BSc (Double), MPH
                      Gold Medalist. 
                    </p>
                  </div>
                </div>
                <div class="cell-sm-8 cell-sm-push-1 text-sm-left">
                  <h2 class="text-bold">About the SBF Nursing Institute</h2>
                  <hr class="divider bg-madison hr-sm-left-0" />
                  <div class="offset-top-30 offset-sm-top-30">
                    <p>
                      SBF Nursing Institute, Lalmonirhat is calling upon you to make a valuable contribution to the society by educating your son / daughter in nursing education and establishing it in life.
                      Sonar Bangla Foundation-USA was born out of gratitude and love for the country of some dedicated people living in America with the conviction of building a poverty-free Bangladesh, quality health care, education and a prosperous country. Its country office in Bangladesh is registered with the Sonar Bangla Foundation-Bangladesh NGO Affairs Bureau and is working towards the goal of the foundation.
                      Function

                    </p>
                  </div>
                  <p>
                    The Sonar Bangla Foundation is working tirelessly to bring quality education services to the doorsteps of people in remote areas of the country, including low cost kidney dialysis services, kidney disease prevention and awareness programs. In the meantime, SBF Research and Development Center is being set up at 20 Kidney Dialysis Centers in different districts of Bangladesh, Bangabandhu Hitech Park, Kalyakair A Kidney Dialysis Machine for addition, repair and maintenance and SBF Nursing Ins in Lalmonirhat District.

                  </p>
                  <p>
                  <strong> Why is SBF Nursing Institute, Lalmonirhat calling you / your children for nursing education?</strong> <br/>
    Diploma in Nursing Science and Midwifery is a 3-year diploma course. If you pass HSC and equivalent course from any group and pass the admission test conducted by Bangladesh Nursing and Midwifery Council, you can be admitted here. Life here is built on very low cost and quality nursing education.
                  </p>
                </div>
              </div>
            </div>
      </section>

{{-- Course Details --}}

<section class="section context-dark section-image-aside section-image-aside-left">
  <div
    class="novi-background bg-cover section-70 section-md-114 bg-madison"
  >
    <div class="shell">
      <div class="range range-xs-center range-sm-right offset-top-0">
        <div class="cell-xs-10 cell-sm-7 text-sm-left">
          <div
            class="section-image-aside-img bg-cover veil reveal-sm-block"
            style="background-image: url('ui/frontend/images/home_course.jpg')"
          ></div>
          <div
            class="section-image-aside-body inset-sm-left-70 inset-lg-left-110"
          >
            <h2 class="text-bold">Our Course</h2>
            <hr class="divider hr-sm-left-0 bg-white" />
            <div class="offset-top-30 offset-md-top-30 text-light">
              This is the course we are currently offer. Many more courses are
              comming soon. As we try to maintain world class quality, we offer those course which are properly ready to serve.
            </div>
            <div class="text-center post-vacation-wrap offset-top-30">
              <article class="post-vacation">               
                <div class="post-vacation-body">
                  <div>
                    <h6 class="post-vacation-title">
                      <a href="{{ route('courses') }}"
                        >Diploma in Nursing Science and Midwifery</a
                      >
                    </h6>
                  </div>                  
                </div>
              </article>              
            </div>
            <div class="offset-top-60">
              <a class="btn btn-primary" href="{{ route('courses') }}"
                >View Course</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Statistics --}}


<section
class="section novi-background bg-cover section-70 section-md-114 bg-default"
>
<div class="shell">
  <h2 class="text-bold">Statistics</h2>
  <hr class="divider bg-madison" />
  <div
    class="range range-65 range-xs-center range-md-left offset-top-55 counters"
  >
    <div class="cell-sm-6 cell-md-3">
      <div class="counter-type-1">
        <span
          class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-school"
        ></span>
        <div class="h3 text-bold text-primary offset-top-15">
          <span class="counter">97</span><span class="symbol">%</span>
        </div>
        <hr class="divider bg-gray-light divider-sm" />
        <div class="offset-top-10">
          <h6 class="text-black font-accent">Graduates</h6>
        </div>
      </div>
    </div>
    <div class="cell-sm-6 cell-md-3">
      <div class="counter-type-1">
        <span
          class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-wallet-travel"
        ></span>
        <div class="h3 text-bold text-primary offset-top-15">
          <span class="counter">10</span><span class="symbol">+</span>
        </div>
        <hr class="divider bg-gray-light divider-sm" />
        <div class="offset-top-10">
          <h6 class="text-black font-accent">Certified Teachers</h6>
        </div>
      </div>
    </div>
    <div class="cell-sm-6 cell-md-3">
      <div class="counter-type-1">
        <span
          class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-domain"
        ></span>
        <div class="h3 text-bold text-primary offset-top-15">
          <span class="counter">8</span><span class="symbol"></span>
        </div>
        <hr class="divider bg-gray-light divider-sm" />
        <div class="offset-top-10">
          <h6 class="text-black font-accent">Student Lab</h6>
        </div>
      </div>
    </div>
    <div class="cell-sm-6 cell-md-3">
      <div class="counter-type-1">
        <span
          class="icon novi-icon icon-lg icon-outlined text-madison mdi mdi-account-multiple-outline"
        ></span>
        <div class="h3 text-bold text-primary offset-top-15">
          <span class="counter">651</span><span class="symbol"></span>
        </div>
        <hr class="divider bg-gray-light divider-sm" />
        <div class="offset-top-10">
          <h6 class="text-black font-accent">Students</h6>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

{{-- Events --}}


<section
class="section novi-background bg-cover section-70 section-md-114 bg-catskill"
>
<div class="shell-wide">
  <h2 class="text-bold">Events</h2>
 
  <hr class="divider bg-madison" />
  <div class="range range-50 offset-top-50 range-xs-center">
  @forelse ( $event as $event )
    <div class="cell-sm-6 cell-md-5 cell-xl-3">       
        <article class="post-event">
        <div class="post-event-img-overlay">
          <img
            class="img-responsive"
            src="{{ 'storage/events/' . $event->img1 }}"
            alt=""
            width="420"
            height="420"
          />
          <div class="post-event-overlay context-dark">
            {{-- <a class="btn btn-primary" href="#">Book Now</a> --}}
            <div class="offset-top-20">
              <a class="btn btn-default" href="{{ route('event_details', ['id'=>$event->id]) }}"
                >Learn More</a
              >
            </div>
          </div>
          <div class="post-event-meta text-center">
            <div
              class="h3 text-bold reveal-inline-block reveal-lg-block"
            >
             {{ date("d", strtotime($event->date)) }}
            </div>
            <p class="reveal-inline-block reveal-lg-block"> {{ date("F", strtotime($event->date)) }}</p>
            <span
              class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
              > {{ date('h:i A', strtotime($event->time)) }}
             </span
            >
          </div>
        </div>
        <div class="unit unit-lg unit-lg-horizontal">
          <div class="unit-body">
            <div class="post-event-body text-lg-left">
              <h6>
                <a href="{{ route('event_details', ['id'=>$event->id]) }}">{{ $event->title }}</a>
              </h6>
              <ul class="list-inline list-inline-xs">
                <li>
                  <a href="team-member-profile.html"
                    ><span
                      class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                    ></span
                    ><span class="inset-left-10 text-dark text-middle"
                      >{{ $event->lecturer_name }}</span
                    ></a
                  >
                </li>
              </ul>
            </div>  
            
          </div> 
       
        </div>
       
      </article>     
      
    </div> 
    @empty
        <p> No Events </p>
      @endforelse
    {{-- <div class="cell-sm-6 cell-md-5 cell-xl-3">
      <article class="post-event">
        <div class="post-event-img-overlay">
          <img
            class="img-responsive"
            src="images/blog/events-02-420x420.jpg"
            alt=""
            width="420"
            height="420"
          />
          <div class="post-event-overlay context-dark">
            <a class="btn btn-primary" href="#">Book Now</a>
            <div class="offset-top-20">
              <a class="btn btn-default" href="event-page.html"
                >Learn More</a
              >
            </div>
          </div>
          <div class="post-event-meta text-center">
            <div
              class="h3 text-bold reveal-inline-block reveal-lg-block"
            >
              05
            </div>
            <p class="reveal-inline-block reveal-lg-block">May</p>
            <span
              class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
              >5:00pm</span
            >
          </div>
        </div>
        <div class="unit unit-lg unit-lg-horizontal">
          <div class="unit-body">
            <div class="post-event-body text-lg-left">
              <h6>
                <a href="event-page.html"
                  >International Conference on Biomolecular
                  Engineering</a
                >
              </h6>
              <ul class="list-inline list-inline-xs">
                <li>
                  <a href="team-member-profile.html"
                    ><span
                      class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                    ></span
                    ><span class="inset-left-10 text-dark text-middle"
                      >Raymond Salazar</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="cell-sm-6 cell-md-5 cell-xl-3">
      <article class="post-event">
        <div class="post-event-img-overlay">
          <img
            class="img-responsive"
            src="images/blog/events-03-420x420.jpg"
            alt=""
            width="420"
            height="420"
          />
          <div class="post-event-overlay context-dark">
            <a class="btn btn-primary" href="#">Book Now</a>
            <div class="offset-top-20">
              <a class="btn btn-default" href="event-page.html"
                >Learn More</a
              >
            </div>
          </div>
          <div class="post-event-meta text-center">
            <div
              class="h3 text-bold reveal-inline-block reveal-lg-block"
            >
              17
            </div>
            <p class="reveal-inline-block reveal-lg-block">June</p>
            <span
              class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
              >5:00pm</span
            >
          </div>
        </div>
        <div class="unit unit-lg unit-lg-horizontal">
          <div class="unit-body">
            <div class="post-event-body text-lg-left">
              <h6>
                <a href="event-page.html">Graphic Design Workshop</a>
              </h6>
              <ul class="list-inline list-inline-xs">
                <li>
                  <a href="team-member-profile.html"
                    ><span
                      class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                    ></span
                    ><span class="inset-left-10 text-dark text-middle"
                      >Bruce Hawkins</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div>
    <div class="cell-sm-6 cell-md-5 cell-xl-3">
      <article class="post-event">
        <div class="post-event-img-overlay">
          <img
            class="img-responsive"
            src="images/blog/events-04-420x420.jpg"
            alt=""
            width="420"
            height="420"
          />
          <div class="post-event-overlay context-dark">
            <a class="btn btn-primary" href="#">Book Now</a>
            <div class="offset-top-20">
              <a class="btn btn-default" href="event-page.html"
                >Learn More</a
              >
            </div>
          </div>
          <div class="post-event-meta text-center">
            <div
              class="h3 text-bold reveal-inline-block reveal-lg-block"
            >
              06
            </div>
            <p class="reveal-inline-block reveal-lg-block">June</p>
            <span
              class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0"
              >5:00pm</span
            >
          </div>
        </div>
        <div class="unit unit-lg unit-lg-horizontal">
          <div class="unit-body">
            <div class="post-event-body text-lg-left">
              <h6><a href="event-page.html">History of Art</a></h6>
              <ul class="list-inline list-inline-xs">
                <li>
                  <a href="team-member-profile.html"
                    ><span
                      class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle"
                    ></span
                    ><span class="inset-left-10 text-dark text-middle"
                      >Danielle Garza</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </article>
    </div> --}}
  {{-- </div> --}}
  <div class="offset-top-50 offset-lg-top-56">
    <a
      class="btn btn-icon btn-icon-right btn-primary"
      href="{{ route('events') }}"
      ><span class="icon fa-arrow-right"></span
      ><span>View Event Calendar</span></a
    >
  </div>
</div>
</section>

{{-- quote-section --}}

<x-frontend.layouts.partials.quotation></x-frontend.layouts.partials.quotation>

{{-- footer --}}

{{-- Latest News --}}

<section
class="section novi-background bg-cover section-70 section-md-114 bg-catskill"
>
<div class="shell isotope-wrap">
  <h2 class="text-bold">Latest News</h2>
  <hr class="divider bg-madison" />
  <div class="row range-30 isotope offset-top-50 text-left">
  @forelse ( $news as $news )
    <div class="col-xs-12 col-sm-6 col-md-4 isotope-item " >      
      <article class="post-news">
        <a href="{{ route('news_details', ['id' => $news->id]) }}"
          ><img
            class="img-responsive"
            src="{{ 'storage/news/' . $news->img1 }}"
            alt=""
            width="370"
            height="240"
        /></a>
        <div class="post-news-body" style="height: 20rem">
          <h6>
            <a href="{{ route('news_details', ['id' => $news->id]) }}">
              {{ $news->title}}</a
            >
          </h6>
          <div class="offset-top-20">
            <p>
              {{ $news->author}}
            </p>
          </div>
          <div class="post-news-meta offset-top-20">
            <span
              class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"
            ></span
            ><span
              class="text-middle inset-left-10 text-italic text-black"
              >{{  $news->created_at->diffForHumans() }}</span
            >
          </div>
        </div>
      </article>
    </div>
    @empty
        <p> No News </p>
      @endforelse
    {{-- <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
      <article class="post-news">
        <a href="news-post-page.html"
          ><img
            class="img-responsive"
            src="images/blog/news-06-370x240.jpg"
            alt=""
            width="370"
            height="240"
        /></a>
        <div class="post-news-body">
          <h6>
            <a href="news-post-page.html"
              >Studying in the United States</a
            >
          </h6>
          <div class="offset-top-20">
            <p>
              International students increasingly want to come to the
              United States for college or graduate school.
            </p>
          </div>
          <div class="post-news-meta offset-top-20">
            <span
              class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"
            ></span
            ><span
              class="text-middle inset-left-10 text-italic text-black"
              >2 days ago</span
            >
          </div>
        </div>
      </article>
    </div> --}}
  {{-- </div> --}}
  {{-- <div class="offset-top-50">
    <a class="btn btn-primary" href="{{ route('news') }}">View All News Posts</a
    >
  </div> --}}
</div>
</section>



</x-frontend.layouts.master>