<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
            <div class="parallax-content section-30 section-sm-70">
                <div class="shell">
                    <h2 class="veil reveal-sm-block" style="color:yellow;">Alumni</h2>
                    <div class="offset-sm-top-35">
                        <ul class="list-inline list-inline-lg list-inline-dashed p">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li style="color:yellow;">Alumni&nbsp;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h1 class=" page-headings text-bold">Our Respected Alumni's</h1>
                <hr class="divider bg-madison">
                <div class="range range-30 text-md-left offset-top-60">
                    @forelse($alumnis as $alumni)
                    <div class="cell-sm-8 cell-md-4"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('storage/alumni/'.$alumni->img) }}" width="270" height="270" alt="">
                        <div class="offset-top-20">
                            <h6 class="text-bold text-primary"><a href="{{ route('home_alumni_details', ['alumni' =>$alumni->id]) }}">{{ $alumni->name }}</a></h6>
                        </div>
                        <div class="offset-top-5">
                            <p>{{$alumni->current_position }}</p>
                        </div>
                        <div class="offset-top-5">
                            <p>Batch:{{$alumni->passing_year }}</p>
                        </div>
                    </div>
                    @empty
                    <p>No Data found</p>
                    @endforelse                    
                </div>
            </div>
        </section>
</x-frontend.layouts.master>