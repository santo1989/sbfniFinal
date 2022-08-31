<x-frontend.layouts.master>
    

<section class="section breadcrumb-modern context-dark parallax-container text-center" data-parallax-img="{{ asset('ui/frontend/images/slider/bannar.png') }}">
        <div class="parallax-content section-30 section-sm-70">
            <div class="shell">
                <h2 class="veil reveal-sm-block" style="color:yellow;">Contact</h2>
                <div class="offset-sm-top-35">
                    <ul class="list-inline list-inline-lg list-inline-dashed p">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li style="color:yellow;">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
                <div class="shell">
                    <div class="range range-65 range-xs-center">
                        <div class="cell-md-12 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.0853710838887!2d89.43610851402396!3d25.900257909175004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2d9005c81ece1%3A0x398763dcf66b5eac!2z4Kah4Ka-4Kef4Ka-4Kas4KeH4Kaf4Ka_4KaVIOCmuOCmruCmv-CmpOCmvywg4Kay4Ka-4Kay4Kau4Kao4Ka_4Kaw4Ka54Ka-4Kaf!5e1!3m2!1sbn!2sbd!4v1652092079419!5m2!1sbn!2sbd" width="100%"  height="450" style="border:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">SBFNI</iframe>
            </div>
            </div>
            </div>
            </section>

            {{-- {{ route('contact.store') }} --}}
            <section class="section novi-background bg-cover section-70 section-md-114 bg-default">
                <div class="shell">
                    <div class="range range-65 range-xs-center">
                        <div class="cell-md-8 text-md-left">
                            <h2 class=" page-headings text-bold">Get in Touch</h2>
                            <hr class="divider bg-madison hr-md-left-0">
                            <div class="offset-top-30 offset-md-top-30">
                                <p class="page-para">You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit us personally. We would be happy to answer your questions.</p>
                            </div>
                            <div class="offset-top-30">
                                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post"  action="{{ route('message.store') }}" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="range range-12">
                                        <div class="cell-sm-6">
                                            <div class="form-group"><label class=" page-paraform-label form-label-outside" for="contact-me-name">First name</label><input class="form-control form-validation-inside" id="contact-me-name" type="text" name="name" data-constraints="@Required"></div>
                                        </div>
                                        <div class="cell-sm-6">
                                            <div class="form-group"><label class=" page-para form-label form-label-outside" for="contact-me-last-name">Last name</label><input class="form-control form-validation-inside" id="contact-me-last-name" type="text" name="last_name" data-constraints="@Required"></div>
                                        </div>
                                        <div class="cell-sm-6">
                                            <div class="form-group"><label class="page-para form-label form-label-outside" for="contact-me-email">E-mail</label><input class="form-control form-validation-inside" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email"></div>
                                        </div>
                                        <div class="cell-sm-6">
                                            <div class="form-group"><label class="page-para form-label form-label-outside" for="contact-me-phone">Phone</label><input class="form-control form-validation-inside" id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric"></div>
                                        </div>
                                        <div class="cell-xs-12">
                                            <div class="form-group"><label class="page-para form-label form-label-outside" for="contact-me-message">Message</label><textarea class="form-control form-validation-inside" id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5 text-md-left offset-top-20"><button class="btn btn-default" style="background-color:khaki;"type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="cell-xs-10 cell-md-4 text-left">
                            <aside class="aside inset-md-left-30">
                                <div class="aside-item-2">
                                    <h6 class="page-para">Phone</h6>
                                    <div>
                                        <div class="hr bg-gray-light offset-top-10"></div>
                                    </div>
                                    <div class="offset-top-15">
                                        <ul class="list list-unstyled">
                                            <li><span class="page-para icon novi-icon icon-xs text-madison mdi mdi-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:+8801747613298">+8801747613298</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="aside-item-2">
                                    <h6 class="page-para">E-mail</h6>
                                    <div>
                                        <div class="hr bg-gray-light offset-top-10"></div>
                                    </div>
                                    <div class="offset-top-15">
                                        <ul class="list list-unstyled">
                                            <li><span class=" page-paraicon novi-icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a class="text-middle inset-left-10" style="color:#5F9EA0;" href="mailto:sbfnil@gmail.com">sbfnil@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="aside-item-2">
                                    <h6 class="page-para">Address</h6>
                                    <div>
                                        <div class="hr bg-gray-light offset-top-10"></div>
                                    </div>
                                    <div class="offset-top-15">
                                        <div class="unit unit-horizontal unit-spacing-xs">
                                            <div class="unit-left"><span class="icon novi-icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                                            <div class="unit-body">
                                                <p><a class="text-dark page-para" href="#">SBF Nursing Institute,<br>Sonali Park, Jail Road,<br>Lalmonirhat-5500, Bangladesh.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-item-2">
                                    <h6 class="page-para">Opening Hours</h6>
                                    <div>
                                        <div class="hr bg-gray-light offset-top-10"></div>
                                    </div>
                                    <div class="offset-top-15">
                                        <div class="unit unit-horizontal unit-spacing-xs">
                                            <div class="unit-left"><span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                                            <div class="unit-body">
                                                <div>
                                                    <p class="page-para">Sat-Tue: 8:00am-8:00pm</p>
                                                </div>
                                                {{-- <div>
                                                    <p class="page-para">Sat: 8:00am-3:00pm</p>
                                                </div> --}}
                                                <div>
                                                    <p class="page-para">Fri: Closed</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="aside-item-2">
                                    <h6 class="page-para">Socials</h6>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                    <ul class="list-inline list-inline-xs list-inline-madison">
                                        <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="https://www.facebook.com/SBF-Nursing-Institute-lalmonirhat-495775934160351" target="blank"></a></li>
                                        <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="#"></a></li>
                                        <li><a class="icon novi-icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="#"></a></li>
                                        <li><a class="icon novi-icon icon-xxs fa-youtube icon-circle icon-gray-light-filled" href="https://www.youtube.com/sonarbanglafoundation" target="blank"></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-frontend.layouts.master>