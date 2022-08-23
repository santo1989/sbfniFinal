<x-frontend.layouts.master>
    @push('css')
    <style>
        .fileupload {
            height: 200px;
        }
    </style>
    @endpush
    <section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block" style="color:yellow;">File Download</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li style="color:yellow;">File Download</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="container"> --}}

        <div style="padding: 10px 10px ">
            
            <div class="col-md-12 col-sm-12 mb-2">
                 @php
                $show_fileupload_admission=App\Models\FileUpload::where('file_type','Admission')->paginate(5);

                @endphp
                
                        
                            <div class="card fileupload">
                                <div class="card-header bg-info  text-center" style="color: #4545E6">
                                    <h3 class="style=color:yellow;" >Admission Related Document</h3>
                                  </div>
                                <div class="card-body ">@forelse($show_fileupload_admission as $fileupload)
                                    <h5 class="page-headings"><a href="{{ asset('storage/files/'.$fileupload->pdf) }}" target="_blank"> {{ $fileupload->file_type }}</a></h5>
                                    <div class="dateSubject">
                                        <p class="page-para">{{ $fileupload->subject }}</p>
                                    </div>
                                </div>
                                @empty
                            <h3>No Admission notice found</h3>
                @endforelse 
                            </div>
                 
                
                {{ $show_fileupload_admission->links() }}
            </div>
        </div>
                <div >
                    <div class="col-md-12 col-sm-12 ">
                    </div>
                </div>
                <div >
            <div class="col-md-12 col-sm-12 mb-2">
                @php
                $show_fileupload_career=App\Models\FileUpload::where('file_type','career')->paginate(5);
                
                @endphp
               
                        
                            <div class="card">
                                <div class="card-header bg-info  text-center" style="color: #4545E6">
                                    <h3 class="style=color:yellow;" >Job and career Related Document</h3>
                                  </div>
                                <div class="card-body "> @forelse($show_fileupload_career as $fileupload)
                                    <h5 class="page-headings"><a href="{{ asset('storage/files/'.$fileupload->pdf) }}" target="_blank"> {{ $fileupload->file_type }}</a></h5>
                                    <div class="dateSubject">
                                        <p class="page-para">{{ $fileupload->subject }}</p>
                                    </div>
                                </div>
                                @empty
                            <h3>No Result notice found</h3>
                @endforelse
                            </div>
                

                {{ $show_fileupload_career->links() }}
            </div>
        </div>
        <div >
            <div class="col-md-12 col-sm-12 ">
            </div>
        </div>
        <div >
            <div class="col-md-12 col-sm-12 ">
                @php
                $show_fileupload_other=App\Models\FileUpload::where('file_type','other')->paginate(5);
                
                @endphp
               
                        
                            <div class="card fileupload">
                                    <div class="card-header bg-info  text-center" style="color: #4545E6">
                                      <h3 class="style=color:yellow;" >Other Document</h3>
                                    </div>
                                <div class="card-body ">
                                     @forelse($show_fileupload_other as $fileupload)
                                    <h5 class="page-headings"><a href="{{ asset('storage/files/'.$fileupload->pdf) }}" target="_blank"> {{ $fileupload->file_type }}</a></h5>
                                    <div class="dateSubject">
                                        <p class="page-para">{{ $fileupload->subject }}</p>
                                    </div>
                                </div>
                                
                            </div>
                @empty
                            <h3>No other notice found</h3>
                @endforelse

                {{ $show_fileupload_other->links() }}
            </div>
        </div>
    {{-- </div> --}}

</x-frontend.layouts.master>