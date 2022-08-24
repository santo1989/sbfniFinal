<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SBF Nursing Institute, Lalmonirhat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Sanskrit&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/customstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('ui/frontend/css/novi.css') }}">
  <style>
    .vertical {
      border-left: .5px solid #393635;
      height: 360px;
      margin-top: 20px;
      margin-bottom: 20px;
      opacity: .5;
    }
  </style>

  <style>
    body {
      font-family: 'Poppins' !important;
      font-size: 16px !important;
    }
  </style>

</head>

<body>

  <!-- Messenger Chat Plugin Code -->
  <div id="fb-root">

  </div>

  <!-- Your Chat Plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102055982511840");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v13.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your Chat Plugin code -->


  <x-frontend.layouts.partials.header />

  {{--Carousel section--}}
  <div id="carouselExampleControls" class="carousel slide mt-3 mb-3" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('ui/frontend/images/slider/slide4.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('ui/frontend/images/slider/slide5.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('ui/frontend/images/slider/slide6.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{--Principal,CEO &  Chairman Section--}}
  <section class="#" style=" padding-top:20px; padding-bottom:20px; background-color: #FFF8EF; ">
    <div class="row">
      <div class="col-md-4 sec2col">
        <div class="d-flex justify-content-between">
          <div class="media block-6 d-block text-center">
            <a href="#">
              <div class="box  d-flex justify-content-center align-items-center mt-5 mb-3">
                <img src="{{ asset('ui/frontend/images/SBF_P.png') }}" class="d-block  mx-auto mt-2 " alt="..." style=" width:150px; height:150px;  border-radius:50%; border:2px solid #e2b75a">
              </div>
            </a>
            <div class="title media-body p-2 mt-3">
              <h3 class="heading  mt-3" style="margin:0 auto; ">President, SBF</h3>
              <p class="">SBF nursing institute, lalmonirhat is one of the most benevolent private nursing institute in bangladesh. It is affiliated by bangladesh nursing and midwifery council. This institute was established for mankind in 2019. <a href="{{ route('guestmessage') }}">....More</a></p>
            </div>
          </div>
          <div class="vertical"></div>
        </div>
      </div>
      <div class="col-md-4 sec2col">
        <div class="d-flex justify-content-between">
          <div class="media block-6 d-block text-center">
            <a href="#">
              <div class="box  d-flex justify-content-center align-items-center mt-5 mb-3">
                <img src="{{ asset('ui/frontend/images/Hosne_Ara_Begum_ndc.jpg') }}" class="d-block  mx-auto mt-2 " alt="..." style=" width:150px; height:150px;  border-radius:50%; border:2px solid #e2b75a">
              </div>
            </a>
            <div class="title media-body p-2 mt-3">
              <h3 class="heading  mt-3" style="margin:0 auto; ">COO, SBF-B</h3>
              <p class="">SBF nursing institute, lalmonirhat is one of the most benevolent private nursing institute in bangladesh. It is affiliated by bangladesh nursing and midwifery council. This institute was established for mankind in 2019. <a href="{{ route('guestmessage_coo') }}">....More</a></p>
            </div>
          </div>
          <div class="vertical"></div>
        </div>
      </div>
      <div class="col-md-4 sec2col">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="box  d-flex justify-content-center align-items-center mt-5 mb-3">
              <img src="{{ asset('ui/frontend/images/SBFNI_VP.png') }}" class="d-block  mx-auto mt-2 " alt="..." style=" width:150px; height:150px;  border-radius:50%; border:2px solid #e2b75a">
            </div>
          </a>
          <div class="title media-body p-2 mt-3">
            <h3 class="heading  mt-3" style="margin:0 auto; "> Vice Principal, SBFNI</h3>
            <p class="">SBF nursing institute, lalmonirhat is one of the most benevolent private nursing institute in bangladesh. It is affiliated by bangladesh nursing and midwifery council. This institute was established for mankind in 2019. <a href="{{ route('guestmessage_vp') }}">....More</a></p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  {{--Different sections--}}
  <section>
    <div class="row">
      <div class="col-md-3 sec2col" style="background-color: #48A14D;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/nurse.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 100px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-5">Nursing</h3>
            <p class="text-white" style="font-family: 'Tiro Devanagari Sanskrit', serif;">Nursing is a profession within the health care sector focused on the care of individuals, families, and communities so they may attain, maintain, or recover optimal health and quality of life. </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sec2col" style="background-color: #A14870;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/admission.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 100px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-5">Admission</h3>
            <p class="text-white" style="font-family: 'Tiro Devanagari Sanskrit', serif;">The admitted student nurses role is a unique opportunity for nurses to familiarize themselves with the hospital and to work with staff outside their normal unit. </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sec2col" style="background-color: #48A14D;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/tution.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 100px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-5">Tution Fee</h3>
            <p class="text-white" style="font-family: 'Tiro Devanagari Sanskrit', serif;">Tution Fees are payable every year.While a number of courses involving computers or media have been growing every year, nursing is also using technology.Tution fee is included with all the laboratory & Computer lab fees. </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 sec2col" style="background-color:#A14870;">
        <div class="media block-6 d-block text-center">
          <a href="#">
            <div class="icon d-flex justify-content-center align-items-center">
              <img src="{{ asset('ui/frontend/images/fonticons/png/scholarship.png') }}" class="d-block w-20 mx-auto mt-5 " alt="..." style="height: 95px;">
            </div>
          </a>
          <div class="media-body p-2 mt-3">
            <h3 class="heading text-white mt-5">Scholarship</h3>
            <p class="text-white" style="font-family: 'Tiro Devanagari Sanskrit', serif;">Scholarship in nursing can be defined as those activities that systematically advance the teaching, research, and practice of nursing through rigorous inquiry . </p>
          </div>
        </div>
      </div>
    </div>
  </section>



  {{--what we offer section--}}
  <section class="mb-2" style="padding-top:50px; padding-bottom:50px; background-color:#FFF8EF; ">
    <div class="row">
      <div class="col-md-7 mb-5">
        <div style="padding-left: 70px; padding-right: 30px; padding-top: 70px;">
          <h1 class="main text-center" style="color:navy;"><b>What We Offer</b></h1>
          <p class="text-black text-center mb-5" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">Achieve a Comprehensive View of Patient Care From Our Institute</p>
          <div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#A14870;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main" style="color:#191970;  font-family: 'Tiro Devanagari Sanskrit', serif;"><b>Scholarship</b></h1>
                    <p class="text-dark" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">We are providing scholarship for poor & meritorious students. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#A14870;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main" style="color:#191970;  font-family: 'Tiro Devanagari Sanskrit', serif;"><b>Multimedia Classrooms</b></h1>
                    <p class="pb-4 text-dark" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">Using multimedia in the classroom makes the students more engaging.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#5F9EA0;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main" style="color:#191970; font-family: 'Tiro Devanagari Sanskrit', serif; "><b>laboratories</b></h1>
                    <p class="pb-4 text-dark" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">6 laboratories rich in modern educational materials and a library rich in adequate text books and magazines.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#5F9EA0; ">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main" style="color:#191970 ;font-family: 'Tiro Devanagari Sanskrit', serif;"><b>Accomodation</b></h1>
                    <p class="pb-4 text-dark" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">We are providing residential hostels with adequate security.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#A14870; ">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main" style="color:#191970 ; font-family: 'Tiro Devanagari Sanskrit', serif;"> <b>100 beded Hospital</b></h1>
                    <p class="pb-4 text-dark" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">Arrangements for clinical practice in a 100-bed hospital.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex">
                  <div class="logo">
                    <div class="icon d-flex justify-content-center align-items-center" style="font-size: 30px; color:#A14870;">
                      <i class="fa-solid fa-user-nurse"></i>
                    </div>
                  </div>
                  <div style="padding-left: 20px;">
                    <h1 class="second-main" style="color:#191970 ; font-family: 'Tiro Devanagari Sanskrit', serif;"><b>Noise-free campus.</b></h1>
                    <p class="pb-4 text-dark" style="font-family: 'Tiro Devanagari Sanskrit', serif; font-size:16px;">Our Campus is located at a noise free place where students get good environment for learning </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="new col-md-5">
        <img src="{{ asset('ui/frontend/images/history/bla1.webp') }}" alt="" style="width:90%; height: 100%; padding-top:20px; padding-bottom:20px;">
      </div>
    </div>
  </section>

  {{--Gallary--}}
  <section class="section  bg-cover section-70 section-md-114 bg-default" style="padding-top:30px;  padding-bottom:80px; height:auto;">

    <div class="container">
      <h1 class="main text-center " style="color:#002833;"><b>Gallary</b></h1>
      <hr class="divider bg-madison" />
      <div class="row" style=" margin: 15px;">
        <a href="{{ asset('ui/frontend/images/gallary/IMG10.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="{{ asset('ui/frontend/images/gallary/IMG10.jpg') }}" class="img-fluid rounded">
        </a>
        <a href="{{ asset('ui/frontend/images/gallary/IMG8.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="{{ asset('ui/frontend/images/gallary/IMG8.jpg') }}" class="img-fluid rounded">
        </a>
        <a href="{{ asset('ui/frontend/images/gallary/IMG11.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="{{ asset('ui/frontend/images/gallary/IMG11.jpg') }}" class="img-fluid rounded">
        </a>
      </div>
    </div>
    <script>
      $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });
    </script>
  </section>
  </section>

  {{--Our Skills Section--}}
  <section class="section  bg-cover section-70 section-md-114 bg-default" style="padding-top:80px;  padding-bottom:80px; background-color:#48A14D; height:auto;">
    <div class="container-fluid">
      <div class="shell">
        <h1 class="main text-center text-white" style="color:white; "><b>Our Skills</b> </h1>
        <hr class="divider bg-white">
        <div class="range range-50 range-xs-center offset-top-50 text-center">
          <div class="cell-sm-6 cell-md-3">
            <!-- Circle Progress bar-circle-->
            <div class="progress-bar-circle progress-bar-modern" data-value="0.88" data-gradient="#A14870" data-thickness="10" data-empty-fill="#48A14D" data-size="130"><span></span></div>
            <div class="offset-top-20">
              <h6 class="text-bold text-white  pt-3">Lab</h6>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-3">
            <!-- Circle Progress bar-circle-->
            <div class="progress-bar-circle progress-bar-modern" data-value="0.9" data-gradient="#A14870" data-thickness="10" data-empty-fill="#48A14D" data-size="130"><span></span></div>
            <div class="offset-top-20">
              <h6 class="text-bold text-white pt-3 ">Teachers</h6>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-3">
            <!-- Circle Progress bar-circle-->
            <div class="progress-bar-circle progress-bar-modern" data-value="0.88" data-gradient="#A14870" data-thickness="10" data-empty-fill="#48A14D" data-size="130"><span></span></div>
            <div class="offset-top-20">
              <h6 class="text-bold text-white pt-3">Campus</h6>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-3">
            <!-- Circle Progress bar-circle-->
            <div class="progress-bar-circle progress-bar-modern" data-value="0.95" data-gradient="#A14870" data-thickness="10" data-empty-fill="#48A14D" data-size="130"><span></span></div>
            <div class="offset-top-20">
              <h6 class="text-bold text-white pt-3">Library</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{--Event Section--}}
  <section class=" section  bg-cover section-70 section-md-114 bg-default" style="padding-top:80px; background-color:#FFF8EF;">
    <div class="shell-wide">
      <h1 class="main text-center" style="color:#002833;"><b>Recent Events</b></h1>
      <hr class="divider bg-madison" />
      <div class="range range-50 offset-top-50 range-xs-center">
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
              <div class="post-event-meta text-center" style="background-color:#48A14D;">
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
                      <a href="team-member-profile.html"><span class="icon novi-icon icon-xxs mdi mdi-account-outline text-middle" style="color:#999999;"></span><span class="inset-left-10 text-dark text-middle">{{ $event->lecturer_name }}</span></a>
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

    {{-- <div class="range-xs-center" style="width:100%;">
      <a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#999999; margin-left:42%;" href="{{ route('events') }}"><span class="icon fa-arrow-right"></span><span>See More Events</span></a>
    </div> --}}
    <br />
    <br />

    {{--for button--}}
    <style>
      .santo {
        border: 1px solid;
        border-radius: 25px;
        display: block;
        text-align: center;
        cursor: pointer;
        /* text-transform: uppercase; */
        outline: none;
        overflow: hidden;
        position: relative;
        /* color: #fff; */
        color: white;
        font-weight: 700;
        font-size: 15px;
        /* background-color: #222; */
        background-color: #48A14D;
        padding: 17px 60px;
        margin: 0 auto;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.20);
      }

      .santo span {
        position: relative;
        z-index: 1;
        font-size: 18px;
      }

      .santo:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        height: 490%;
        width: 140%;
        /* background: #78c7d2; */
        /* background:  #B38947; */
        background: #A14870;
        -webkit-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        -webkit-transform: translateX(-98%) translateY(-25%) rotate(45deg);
        transform: translateX(-98%) translateY(-25%) rotate(45deg);
      }

      .santo:hover:after {
        -webkit-transform: translateX(-9%) translateY(-25%) rotate(45deg);
        transform: translateX(-9%) translateY(-25%) rotate(45deg);
      }

      .link {
        font-size: 20px;
        margin-top: 30px;
      }

      .link a {
        color: #000;
        font-size: 25px;
      }
    </style>

    <button class="santo"><a href="{{ route('events') }}"><span>See More Events</span></a></button>
  </section>



  {{--Quotation display section--}}
  <x-frontend.layouts.partials.quot3>
  </x-frontend.layouts.partials.quot3>


  {{--Recent News Section--}}
  <section class=" pb-5 bg-catskill section-70 section-md-114" style="padding-top:80px;">
    <div class="shell isotope-wrap justify-content-center">
      <h1 class="main text-center " style="color:#002833;"><b>Latest News</b></h1>
      <hr class="divider bg-madison" />
      <div class="range range-50 offset-top-50 range-xs-center" style="padding-bottom:10px;">
        @forelse ( $news as $news )
        {{-- <div class="col-xs-12 col-sm-6 col-md-4 isotope-item"> --}}
        {{-- <article class="post-news">
            <a href="news-post-page.html"><img class="img-responsive" src="{{ asset('ui/frontend/images/blog/news-04-370x240.jpg') }}" alt="" width="370" height="240" /></a>
        <div class="post-news-body">
          <h6>
            <a href="news-post-page.html" style="color:#999999;">
              Ways Parents and Counselors</a>
          </h6>
          <div class="offset-top-20">
            <p>
              Securing scholarships can be stressful, but parents and
              counselors can serve as a resource.
            </p>
          </div>
          <div class="post-news-meta offset-top-20">
            <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic " style="color:#5F9EA0;">3 days ago</span>
          </div>
        </div>
        </article>
      </div>--}}
      <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
        <article class="post-news">
          <a href="{{ route('news_details', ['id' => $news->id]) }}"><img class="img-responsive" src="{{ 'storage/news/' . $news->img1 }}" alt="" width="370" height="240" /></a>
          <div class="post-news-body" style="height: 20rem">
            <h6>
              <a href="{{ route('news_details', ['id' => $news->id]) }}" style="color:#999999;">
                {{ $news->title}}" </a>
            </h6>
            <div class="offset-top-20">
              <p>
                {{ $news->author}}
              </p>
            </div>
            <div class="post-news-meta offset-top-20">
              <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic" style="color:#5F9EA0;">{{ $news->created_at->diffForHumans() }}</span>
            </div>
          </div>
        </article>
      </div>
      @break($loop->iteration == 3)
      @empty
      <p> No News </p>
      @endforelse
    </div>
    {{-- <div class="col-xs-12 col-sm-6 col-md-4 isotope-item">
          <article class="post-news">
            <a href="news-post-page.html"><img class="img-responsive" src="{{ asset ('ui/frontend/images/blog/news-06-370x240.jpg') }}" alt="" width="370" height="240" /></a>
    <div class="post-news-body">
      <h6>
        <a href="news-post-page.html" style="color:#999999;">Studying in the United States</a>
      </h6>
      <div class="offset-top-20">
        <p>
          International students increasingly want to come to the
          United States for college or graduate school.
        </p>
      </div>
      <div class="post-news-meta offset-top-20">
        <span class="icon novi-icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic" style="color:#5F9EA0;">2 days ago</span>
      </div>
    </div>
    </article>
    </div>
    </div> --}}
    {{-- <div class="range-xs-center" style="width:100%;">
      <a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#999999; margin-left:42%;" href="{{ route('news') }}"><span class="icon fa-arrow-right"></span><span>See More </span></a>
    </div> --}}
    {{-- </div> --}}

    {{--<div class="range-xs-center" style="width:100%;">
      <a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#999999; margin-left:42%;" href="{{ route('news') }}"><span class="icon fa-arrow-right"></span><span>See More News</span></a>--}}
    {{-- <button class="santo mt-4"><a href="{{ route('news') }}" target="_blank"></a><span>See More News</span></button> --}}
    <button class="santo"><a href="{{ route('news') }}"><span>See More News</span></a></button>
    {{-- </div> --}}
  </section>



  {{--Alumni Section--}}
  <section style="padding-top:80px; padding-bottom:20px; background-color:#FFF8EF;">
    <div class="shell-wide" style="padding-bottom:10px;">
      <h1 class="main text-center" style="color:#002833;"><b>Our Alumni</b></h1>
      <hr class="divider bg-madison" />
      <x-frontend.layouts.partials.alumni>
      </x-frontend.layouts.partials.alumni>
    </div>
    {{--<div class="range-xs-center" style="width:100%;">
      <a class="btn btn-default btn-icon btn-icon-right justify-content-center" style="background-color:#999999; margin-left:42%;" href="{{ route('home_alumni') }}"><span class="icon fa-arrow-right"></span><span>See More Alumni</span></a>--}}
    {{-- <button class="santo mt-4 "><a href="{{ route('home_alumni') }}" target="_blank"></a><span>See More Alumni</span></button> --}}
    <button class="santo"><a href="{{ route('home_alumni') }}"><span>See More Alumni</span></a></button>
    {{-- </div> --}}
  </section>



  {{--Ranking Section--}}
  <section class=" pb-5 bg-catskill" style="padding-top:80px;">
    <div class="shell isotope-wrap">
      <h1 class="main text-center" style="color:#002833;"><b>Our Ranking</b></h1>
      <p class="text-grey mb-5 text-center">See our Institution's Ranking</p>
      <hr class="divider bg-madison" />
      <div class="container">
        <div class="row">
          @forelse ( $rankings as $ranking )
          <div class="col-lg-3 col-md-3 col-sm-12 py-2 d-flex justify-content-center" style="padding-top:8px;">
            <div class="card" style="width: 25rem;">
              <img src="{{ asset('storage/ranking/'.$ranking->img) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="text-center" style="color:#999999">Ranking By: {{ $ranking->rank_name }}</h5>
                <h5 class="text-center" style="color:#5F9EA0">Our Position: {{ $ranking->rank_position }}</h5>
                <h6 class="text-center" style="color:#5F9EA0">Ranking Year: {{ $ranking->rank_year }}</h6>
              </div>
            </div>
          </div>
          @empty
          <p> No Ranking </p>
          @endforelse
          {{-- <div class="col-3">
            <div class="card" style="width: 25rem;">
              <img src="{{ asset ('ui/frontend/images/ranking/images.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="text-center" style="color:#999999">Ranking</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 25rem;">
          <img src="{{ asset ('ui/frontend/images/ranking/images.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="text-center" style="color:#999999">Ranking</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 25rem;">
          <img src="{{ asset ('ui/frontend/images/ranking/images.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="text-center" style="color:#999999">Ranking</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div> --}}
    </div>
    </div>
    </div>
  </section>


  {{--What Visitors say about us section(Previous One)--}}
  {{-- <section class="quote" style="padding-top: 80px;">
    <h1 class="main text-center text-white"><b>Visitors Say About Us </b></h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carbutton carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="outerrr" style="padding-top: 20px;">
                <div class="outerrr-one">
                  <img src="{{ asset('ui/frontend/images/avatar.png') }}" alt="" class=" quote-img" style="margin-top: 10px;">
  <p class="text-center" style="color:#999999">Ismat Farjana</p>
  </div>
  <p class="text-center" style="color:white">CFO</p>
  </div>
  </div>
  <div class="col-md-8">
    <div class="quote-text ">
      <div>
        <p class="text-center quote-p"> <i class="fa fa-quote-left me-2" style="font-size:36px"></i> The align-items property specifies the default alignment for items inside the flexible container.
          Tip: Use the align-self property of each item to override the align-items property bla bla bla bla.</p>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="carousel-item">
    <div class="row">
      <div class="col-md-4">
        <div class="outerrr" style="padding-top: 20px;">
          <div class="outerrr-one">
            <img src="{{ asset('ui/frontend/images/avatar.png') }}" alt="" class=" quote-img" style="margin-top: 10px;">
            <p class="text-center " style="color:#999999">Ismat Farjana</p>
          </div>
          <p class="text-center" style="color:white">CFO</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="quote-text ">
          <div>
            <p class="text-center quote-p"> <i class="fa fa-quote-left me-2" style="font-size:36px"></i> The align-items property specifies the default alignment for items inside the flexible container.
              Tip: Use the align-self property of each item to override the align-items property bla bla bla bla.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <div class="row">
      <div class="col-md-4">
        <div class="outerrr" style="padding-top: 20px;">
          <div class="outerrr-one">
            <img src="{{ asset('ui/frontend/images/avatar.png') }}" alt="" class=" quote-img" style="margin-top: 10px;">
            <p class="text-center" style="color:#999999">Ismat Farjana</p>
          </div>
          <p class="text-center" style="color:white">CFO</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="quote-text ">
          <div>
            <p class="text-center quote-p"> <i class="fa fa-quote-left me-2" style="font-size:36px"></i> The align-items property specifies the default alignment for items inside the flexible container.
              Tip: Use the align-self property of each item to override the align-items property bla bla bla bla.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  </section> --}}


  {{-- <x-frontend.layouts.partials.quotation>
  </x-frontend.layouts.partials.quotation> --}}


  {{--Footer Section--}}
  <x-frontend.layouts.partials.footer />





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script>
    var height = $('#fiji-id').height();
    $(window).scroll(function() {
      if ($(this).scrollTop() > height) {
        $('.fiji-class').addClass('fixed');
      } else {
        $('.fiji-class').removeClass('fixed');
      }
    });
  </script>
  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("fiji-slides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
  </script>
  <script src="{{ asset('ui/frontend/js/core.min.js') }}"></script>
  <script src="{{ asset('ui/frontend/js/script.js') }}"></script>
  <script src="https://kit.fontawesome.com/fb57673c61.js" crossorigin="anonymous"></script>
</body>

</html>