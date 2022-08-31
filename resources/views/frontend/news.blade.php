<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
    <div class="parallax-content section-30 section-sm-70">
        <div class="shell">
            <h2 class="veil reveal-sm-block" style="color:yellow;">News</h2>
            <div class="offset-sm-top-35">
                <ul class="list-inline list-inline-lg list-inline-dashed p">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li style="color:yellow;">News</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-catskill">
            <div class="shell">
                <div class="range range-85 range-xs-center">
                    <div class="cell-md-12">
                        <div class="range range-30 text-sm-left range-xs-center">
                            @forelse($newses as $news)
                                <div class="cell-sm-4">
                                    <article class="post-news"><a href="{{ route('news_details', ['id' => $news->id]) }}"><img class="img-responsive" src="{{ asset('storage/news/'.$news->img2) }}" width="370" height="240" alt=""></a>
                                        <div class="post-news-body">
                                            <h6><a href="{{ route('news_details', ['id' => $news->id]) }}">{{ $news->title }}</a></h6>
                                            <div class="offset-top-20">
                                                <p>{{ $news->script1 }}</p>
                                            </div>
                                            <div class="post-news-meta offset-top-20"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">{{ $news->created_at->diffForHumans() }}</span></div>
                                        </div>
                                    </article>
                                </div>
                            @empty
                                <p>No News Found</p>
                            @endforelse
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
</x-frontend.layouts.master>