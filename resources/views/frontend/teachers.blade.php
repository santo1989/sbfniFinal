<x-frontend.layouts.master>
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block">Teacher</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="text-white">Teachers&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <h1 style="font-family: Tiro Devanagari Sanskrit, serif; font-size:36px; ">Our Respected Teachers</h1>
                <hr class="divider bg-madison">
                @forelse ($teachers as $teacher)

                <div class="range range-30 text-md-left offset-top-60">
                    <div class="cell-sm-6 cell-md-3"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('storage/teachers/'.$teacher->img) }}" alt="{{$teacher->name }}" width="270" height="270">
    <div class="offset-top-20">
        <h6 class="text-bold text-primary">
            <a href="{{ route('home_teacher_details', ['teacher' =>$teacher->id]) }}">{{$teacher->name }}</a>

    </div>
    <div class="offset-top-5 text-bold text-secondary">
        <p> Designation: {{$teacher->designation }}</p>
    </div>
    <div class="offset-top-5 text-bold text-secondary">
        <p>Qualification: {{$teacher->qualification }}</p>
    </div>
    <div class="offset-top-5 text-bold text-secondary">
        <p>E-mail: {{$teacher->email }}</p>
    </div>
    <div class="offset-top-5 text-bold text-secondary">
        <p>Phone: {{$teacher->phone }}</p>
    </div>
    </div>
    @empty
    <p>No Teacher Found</p>
    @endforelse
    </div>
    </div>
    </section>--}}

    <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
        <div class="shell">
            <h1 class="main text-bold">Our Respected Teachers</h1>
            <hr class="divider bg-madison">
            <div class="range range-30 text-md-left offset-top-60">
                @forelse($teachers as $teacher)
                <div class="cell-sm-8 cell-md-4"><img class="img-responsive reveal-inline-block img-rounded" src="{{ asset('storage/teachers/'.$teacher->img) }}" width="270" height="270" alt="">
                    <div class="offset-top-20">
                        <h6 class="text-bold" style="color:#002833;"><a href="{{ route('home_teacher_details', ['teacher' =>$teacher->id]) }}">{{ $teacher->name }}</a></h6>
                    </div>
                    <div class="offset-top-5">
                        <p>{{$teacher->designation }}</p>
                    </div>
                </div>
                @empty
                <p>No teachers found</p>
                @endforelse
            </div>
        </div>
    </section>
</x-frontend.layouts.master>