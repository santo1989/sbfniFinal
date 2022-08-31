<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block" style="color:yellow;">Scholar's Profile</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li style="color:yellow;">Scholar's Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-30 range-xs-center">
                    <div class="cell-sm-4 text-sm-left">
                        <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{ asset('storage/news/'.$scholarship->image  ) }}" width="340" height="340" alt="">
                            {{-- <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="#" style="max-width: 340px; margin-left:auto; margin-right:auto">Get in Touch</a></div>--}}
                        </div> 
                    </div>
              {{--{{  App\Models\Teacher::where('id', $teachers)->first() }}--}}
                    <div class="cell-sm-8 text-left">
                        <div>
                            <h3 class="text-bold">{{ $scholarship->scholarship_name  }}</h3>
                        </div>
                        <p class="offset-top-10">{{ $scholarship->student_reg_no }}</p>
                        <div class="offset-top-15 offset-sm-top-30">
                            <hr class="divider bg-madison hr-left-0">
                        </div>
                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Scholership Commitment By :  {{ $scholarship->scholarship_commitment }}</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Scholership Year</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <p>{{ $scholarship->year }}</p>
                        </div>

                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Scholership Information</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                        <ul class="list list-unstyled">
                            <p>Doner: {{ $scholarship->doner_name }}</p>
                            </ul>
                        </div>

                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Scholership Amount</h6>
                            <div class="text-subline"></div>
                        </div>

                        <div class="offset-top-20">
                            <p>{{ $scholarship->scholarship_amount }}</p>
                        </div>

                        <div class="offset-top-30 offset-sm-top-30">
                            <h6 class="text-bold">Scholership Description</h6>
                            <div class="text-subline"></div>
                        </div>
                        <div class="offset-top-20">
                            <p>{{ $scholarship->scholarship_description }}</p>
                        </div>

                        
                        <div class="offset-top-20">
                        <ul class="list list-unstyled">
                            <p>Scholership Status: 
                                {{ $scholarship->scholarship_status }}</p>
                            </ul>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </section>
</x-frontend.layouts.master>