<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block" style="color:yellow;">News Details</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('news') }}">News</a></li>
                    <li style="color:yellow;">News details</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell" >
        <div class="range range-50 range-xs-center">
            <div class="cell-sm-8 cell-md-8 text-md-left">
                <h3 class="page-para"> {{ $newnews->title }} </h3>
                <hr class="divider bg-madison hr-md-left-0">
                <div class="offset-md-top-20 offset-top-10">
                    <ul class="post-news-meta list list-inline list-inline-xl" style="padding:0px 5px;">
                        <li><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">{{ $newnews->created_at->diffForHumans() }}</span></li>
                        <li><span class="icon novi-icon icon-xs mdi mdi-account text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-primary">{{ $newnews->author }}</span></li>
                    </ul>
                </div>
                <div class="offset-top-30" style="padding:10px 10px;"><img class="img-responsive" src="{{ asset('storage/news/'.$newnews->img1) }}" width="770" height="500" alt="">
                    <div class="offset-top-30" style="padding:10px 10px;">
                        <p class="page-para">{{ $newnews->script1 }}</p>
                    </div>
                    
                </div>
                <div class="offset-top-30" style="padding:10px 10px;"><img class="img-responsive" src="{{ asset('storage/news/'.$newnews->img2) }}" width="770" height="500" alt="">
                    <div class="offset-top-30" style="padding:10px 10px;">
                        <p class="page-para">{{ $newnews->script2 }}</p>
                    </div>
                   
                </div>
                <!-- <div class="offset-top-30 post-news-meta range range-20 range-xs-middle range-xs-center">
                    <div class="cell-md-6">
                        <div class="tags-list group group-sm reveal-inline-block text-middle"><a class="btn btn-xs btn-primary text-italic" href="#">News</a><a class="btn btn-xs btn-primary text-italic" href="#">Colleges</a><a class="btn btn-xs btn-primary text-italic" href="#">Liberal Arts</a><a class="btn btn-xs btn-primary text-italic" href="#">University</a></div>
                    </div>
                    <div class="cell-md-6">
                        <ul class="list-inline list-inline-xs list-inline-madison pull-md-right text-middle">
                            <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="#"></a></li>
                            <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                            <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                            <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="#"></a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="offset-top-50">
                    <h6 class="text-bold">Author</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30">
                        <div class="unit unit-sm unit-sm-horizontal unit-spacing-lg" style="padding:10px 10px;">
                            <div class="unit-left"><img class="img-responsive img-rounded reveal-inline-block" src="{{ asset('storage/news/'.$newnews->author_img) }}" width="170" height="170" alt=""></div>
                            <div class="unit-body text-sm-left">
                                <h6 class="text-bold text-primary">{{ $newnews->author }}</h6>
                                <p>{{ $newnews->author_details }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="offset-md-top-50 offset-top-40">
                        <h6 class="text-bold">Comments</h6>
                        <div class="text-subline"></div>
                        <form class="rd-mailform text-left offset-top-20" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="range range-12">
                                <div class="cell-sm-6">
                                    <div class="form-group"><label class="form-label form-label-outside" for="contact-us-first-name">Name</label><input class="form-control form-validation-inside" id="contact-us-first-name" type="text" name="first-name" data-constraints="@Required"></div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-group"><label class="form-label form-label-outside" for="contact-us-email">E-mail</label><input class="form-control form-validation-inside" id="contact-us-email" type="email" name="email" data-constraints="@Required @Email"></div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-group"><label class="form-label form-label-outside" for="contact-us-message">Comments</label><textarea class="form-control form-validation-inside" id="contact-us-message" name="commets" data-constraints="@Required"></textarea></div>
                                </div>
                            </div>
                            <div class="offset-top-20 text-center text-sm-left"><button class="btn btn-primary" type="submit">Send Message</button></div>
                        </form>
                    </div> -->
                </div>
            </div>
            <div class="cell-xs-8 cell-md-4 text-left">
                <aside class="aside inset-md-left-30">
                    <div class="aside-item">
                        <h6 class="text-bold">Search</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-30">
                            <form class="form-search rd-search form-search-widget" action="{{ route('news') }}" method="GET">
                                <div class="form-group">
                                    <div class="input-group"><input class="form-search-input  form-control" type="text" name="search" autocomplete="off"><span class="input-group-btn"><button class="btn btn-primary" type="submit"><span class="icon fa-search"></span></button></span></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="aside-item">
                        <h6 class="text-bold">Archive</h6>
                        <div class="text-subline"></div>
                        <div class="row offset-top-20">

                            @foreach($archive as $year => $months)
    <div>
        <div id="heading_{{ $loop->index }}">
            <h4 class="mb-0">
                <button class="btn btn-link py-0 my-0" data-toggle="collapse"
                        data-target="#collapse_{{ $loop->index }}"
                        aria-expanded="true"
                        aria-controls="collapse_{{ $loop->index }}"><h4>{{ $year }}</h4>
                    
                </button>
                
            </h4>
        </div>

        <div id="collapse_{{ $loop->index }}" class="collapse" aria-labelledby="heading_{{ $loop->index }}"
             data-parent="#accordion">
            <div>
                <ul style="list-style-type: none;">
                    @foreach($months as $month => $posts)
                        <li class="">
                                {{ $month }} ( {{ count($posts) }} )
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endforeach
                            
                            {{-- <div class="col-xs-6">
                                <ul class="list list-marked list-marked-primary">
                                    <li><a href="#">Jun 2021</a></li>
                                    <li><a href="#">Aug 2021</a></li>
                                    <li><a href="#">Oct 2<span data-novi-id="4">01</span></a><span data-novi-id="5">8</span></li>
                                    <li><a href="#">Dec 2021</a></li>
                                    <li><a href="#">Feb 2021</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul class="list list-marked list-marked-primary">
                                    <li><a href="#">Jul 2020</a></li>
                                    <li><a href="#">Sep 2020</a></li>
                                    <li><a href="#">Nov 2021</a></li>
                                    <li><a href="#">Jan 2022</a></li>
                                    <li><a href="#">Mar 2022</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="aside-item">
                        <h6 class="text-bold">Gallery</h6>
                        <div class="text-subline"></div>
                        <div class="range range-condensed range-custom offset-top-20" data-lightgallery="group">
                            <div class="cell-6"><a class="thumbnail-default" href="{{ asset('storage/news/'.$newnews->gl_img1) }}" data-lightgallery="item"><img src="{{ asset('storage/news/'.$newnews->gl_img1) }}" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                            <div class="cell-6"><a class="thumbnail-default" href="{{ asset('storage/news/'.$newnews->gl_img2) }}" data-lightgallery="item"><img src="{{ asset('storage/news/'.$newnews->gl_img2) }}" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                            <div class="cell-6"><a class="thumbnail-default" href="{{ asset('storage/news/'.$newnews->gl_img3) }}" data-lightgallery="item"><img src="{{ asset('storage/news/'.$newnews->gl_img3) }}" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                            <div class="cell-6"><a class="thumbnail-default" href="{{ asset('storage/news/'.$newnews->gl_img4) }}" data-lightgallery="item"><img src="{{ asset('storage/news/'.$newnews->gl_img4) }}" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                            <div class="cell-6"><a class="thumbnail-default" href="{{ asset('storage/news/'.$newnews->gl_img5) }}" data-lightgallery="item"><img src="{{ asset('storage/news/'.$newnews->gl_img5) }}" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                            <div class="cell-6"><a class="thumbnail-default" href="{{ asset('storage/news/'.$newnews->gl_img6) }}" data-lightgallery="item"><img src="{{ asset('storage/news/'.$newnews->gl_img6) }}" alt="" width="320" height="320"><span class="icon novi-icon fa-search-plus"></span></a></div>
                        </div>
                    </div>
                    <div class="aside-item">
                        <h6 class="text-bold">Relavent Links</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-20" style="padding:5px 5px;">
                            <ul class="list list-marked list-marked-primary">
                                <li><a href="http://www.bnmc.gov.bd/" target="_blank">Nursing Council</a></li>
                                <li><a href="http://bnmc.teletalk.com.bd/" target="_blank">Admission Form Link</a></li>
                                <li><a href="http://dgnm.gov.bd/" target="_blank">DG Nursing and Midwifery </a></li>
                                <li><a href="https://www.sbfus.org/" target="_blank"> Sonar Bangla Foundation </a></li>
                                {{-- <li><a href="#">Colleges</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
</x-frontend.layouts.master>