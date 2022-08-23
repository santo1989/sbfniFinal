<x-frontend.layouts.master>
    
<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block" style="color:yellow;">Campus & Others</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li style="color:yellow;">Campus&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section style="margin:200px;">
   <section style="margin:30px; padding:0px 0px 20px 20px">
   <h3 class="page-headings" style="color:#002833;">Facilities of SBFNI Nursing Institute</h3>
   <div class="page-para">
       1. Scholarships for poor and meritorious students.<br>
       2. Multimedia teaching in the class room.<br>
       3. 6 laboratories rich in modern educational materials and a library rich in adequate text books and magazines.<br>
       4. Advanced modern computer lab with internet connection.<br>
       5. Arrangements for clinical practice in a 100-bed hospital.<br>
       6. Teaching by highly educated and experienced teachers from home and abroad.<br>
       7. Observation of the education system by American expatriate teachers.<br>
       8. Accommodation (residential hostel) with adequate security.<br>
       9. Campuses and residential hostels controlled by CCTV cameras round the clock.<br>
       10. Healthy and quality food is provided in the campus canteen.<br>
       11. Adequate sports and recreational facilities.<br>
       12. Noise-free campus.<br>
   </div>
</section>
<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
    <div class="shell">
        {{-- <h2>Grid Gallery</h2> --}}
        <hr class="divider bg-madison">
        <div class="offset-top-60">
            <div class="range range-30 range-xs-center" data-lightgallery="group">
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap" ><img src="{{ asset('ui/frontend/images/gallary/img1.jpg') }}" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            {{-- <div>
                                <h4 class="thumbnail-classic-title">Photo #1</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Eposs messis in fortis revalia! Persuadere una ducunt ad audax aonides</p> --}}
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="{{ asset('ui/frontend/images/gallary/img1.jpg') }}" data-lightgallery="item" width="370" height="370"><img src="{{ asset('ui/frontend/images/gallary/img1.jpg') }}" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>

               

                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap" ><img src="{{ asset('ui/frontend/images/gallary/img2.jpg') }}" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            {{-- <div>
                                <h4 class="thumbnail-classic-title">Photo #1</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Eposs messis in fortis revalia! Persuadere una ducunt ad audax aonides</p> --}}
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="{{ asset('ui/frontend/images/gallary/img2.jpg') }}" data-lightgallery="item" width="370" height="370"><img src="{{ asset('ui/frontend/images/gallary/img2.jpg') }}" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>

                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md" >
                        <div class="thumbnail-classic-img-wrap"><img src="{{ asset('ui/frontend/images/gallary/img4.jpg') }}" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            {{-- <div>
                                <h4 class="thumbnail-classic-title">Photo #1</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Eposs messis in fortis revalia! Persuadere una ducunt ad audax aonides</p> --}}
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="{{ asset('ui/frontend/images/gallary/img4.jpg') }}" data-lightgallery="item" width="370" height="370"><img src="{{ asset('ui/frontend/images/gallary/img4.jpg') }}" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>

                {{-- <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-02-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #2</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Est festus habena, cesaris. A falsis, luna salvus barcas. Talis exsul inter</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-02-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-02-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-03-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #3</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Vae. Cur gallus experimentum? Devatios peregrinatione! Impositio cadunts</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-03-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-03-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-04-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #4</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Est ferox domus, cesaris. Cur nix ridetis? Magister de nobilis assimilatio</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-04-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-04-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-05-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #5</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>A falsis, detrius secundus repressor. Ridetis sapienter ducunt ad audax</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-05-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-05-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-06-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #6</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Historia, orgia, et finis. Adgium ferox nixus est. Hercle, classis dexter</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-06-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-06-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div> --}}
                {{-- <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-07-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #7</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Bromiums peregrinatione in avenio! A falsis, equiso peritus assimilatio</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-07-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-07-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div> --}}
                {{-- <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-08-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #8</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Pars tolerares, tanquam brevis silva. Eheu, cursus! Glutens favere, tanquam</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-08-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-08-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div> --}}
                {{-- <div class="cell-xs-10 cell-sm-6 cell-md-4">
                    <figure class="thumbnail-classic thumbnail-md">
                        <div class="thumbnail-classic-img-wrap"><img src="images/portfolio/gallery-09-370x370.jpg" alt="" width="370" height="370"> </div>
                        <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title">Photo #9</h4>
                            </div>
                            <hr class="divider divider-sm">
                            <p>Eheu. Sunt parses aperto audax, lotus brodiumes. Camerarius idoleums</p>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="thumbnail-classic-link icon novi-icon icon-xxs fa-search-plus" href="images/portfolio/gallery-09-370x370.jpg" data-lightgallery="item"><img src="images/portfolio/gallery-09-370x370.jpg" alt="" width="370" height="370"></a></div>
                        </figcaption>
                    </figure>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<section style="margin:5px;padding:0px 20px 20px 20px">
   <h3 class="page-headings">Extra Facilities of SBFNI Nursing Institute</h3>
   <p class="page-para">Students will not need to buy any books. There is also a set of high quality beds, reading tables, reading chairs and mattress pillows for the students staying in the hostel. 5% quota for poor and meritorious students is taught for free. Moreover, if a student can get very good result in 1st year final examination, then his next course fee is completely waived. Even many students who are very good at studying stay completely free. So there are many benefits to studying here. There is a nice management and board of directors who are very efficient and liberal. While pursuing Diploma in Nursing Science and Midwifery degree from SBF Nursing Institute, Lalmonirhat, there are many courses including Post Basic BSc in Nursing and MSc in Nursing or MPH. There are many job opportunities in this profession at home and abroad, including getting a doctorate degree in nursing while working.

   </p>
   </section>
   </section>


</x-frontend.layouts.master>