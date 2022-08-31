<header style="background-color:#FFF8EF;">
  

    <div class="row" id="fiji-id">
      <div class="fiji col-md-4">
        <div class="d-flex mt-5">
          <div style="padding-right:7px; padding-top:15px;">
            <i class="fa-solid fa-phone" style="font-size:20px; color:#282828"></i>
          </div>
          <div class="fiji-p" style="font-size:110%; width:70px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#002833;">
            <p><a class="text-dark" href="tel:+8801318045241">+8801318045241,</a></p>
            <p><a class="reveal-block reveal-md-inline-block text-dark" href="tel:+8801747613298">+8801747613298</a></p>
          </div>
        </div>
      </div>
      
      <div class="fiji col-md-4 mb-5">
        <div class="bla rd-navbar-brand"><a class="reveal-inline-block" href="{{ route('home') }}"><img src="{{ asset('ui/frontend/images/logo/sbf.png') }}" alt="" width="191" height="80"></a></div>
      </div>
      <div class="fiji col-md-4" style="margin-top:10px;">
        <div style="padding-right:7px;">
        <i class="fa-solid fa-location-dot" style="font-size:26px;color:#282828 "></i>
      
        </div>
        <div class="fiji-p2">
          <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#002833; font-size:15px">SBF Nursing Institute,<br>Sonali Park, Jail Road,<br>Lalmonirhat-5500, Bangladesh.</p>
        </div>
      </div>
    </div>
  
    
    {{--nav start--}}
    <nav class="fiji-class">
      <div class="wrapper">
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
          <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
          <li class="me-3 pt-1"><a href="{{ route('home') }}">Home</a></li>

          <li class="pt-1">
            <a href="{{ route('about') }}" class="desktop-item">About</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">About</label>
            <ul class="drop-menu">
              <li ><a href="{{ route('governing_body') }} ">Governing Body</a></li>
              <li ><a href="{{ route('int_advisors') }}">International Advisor</a></li>
              <li ><a href="{{ route('management_committee') }}">Board of Advisory</a></li>
            </ul>
          </li>


          <li class="pt-1">
            <a href="{{ route('courses') }}" class="desktop-item me-3">Academics</a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">Academics</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="{{ asset ('ui/frontend/images/events/events.jpg')}}" alt="" style="width:100%;">
                </div>
                <div class="row">
                  <header>Teacher's Directory</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('home_teachers') }} ">Teachers</a></li>
                    <li><a href="{{ route('int_advisors') }}">Int. Advisor</a></li>
                    <li><a href="{{ route('management_committee') }}">Management </a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>Academics</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('courses') }}">Courses</a></li>
                    <li><a href="{{ route('home_alumni') }}">Alumni</a></li>
                    <li><a href="{{ route('curriculam') }}">Course Curriculam</a></li>
                  </ul>
                </div>
                <div class="row">
                  <header>Additional Info</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('labothers') }}">Laboratory</a></li>
                    <li><a href="{{ route('labothers') }}">Campus</a></li>
                    <li><a href="{{ route('labothers') }}">Ranking</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="pt-1">
            <a href="{{ route('admission_information') }}" class="desktop-item me-3">Admission</a>
            <input type="checkbox" id="showMega1">
            <label for="showMega1" class="mobile-item">Admission</label>
            <div class="mega-box">
              <div class="content">
                <div class="row">
                  <img src="{{ asset ('ui/frontend/images/history/building.jpg')}}" alt="" style="width:150%; height:100%">
                </div>
                <div class="row">
                  <header>Admission</header>
                  <ul class="mega-links">

                    <li><a href="{{ route('admission_procedure') }}">Admission Procedure</a></li>
                    <li><a href="{{ route('download') }}">Admission Form</a></li>
                    <li><a href="#">Financial Aid & Scholarship</a></li>
                   
                  </ul>
                </div>
                <div class="row">
                  <header>Guidelines</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('admission_information') }}">Admission Eligibility</a></li>
                    <li><a href="{{ route('guidelines') }}">Admission Guidelines</a></li>
                    <li><a href="{{ route('admission_procedure') }}">Admission Process</a></li>
                 
                  </ul>
                </div>

                <div class="row">
                  <header>Tution Fee & Scholarship</header>
                  <ul class="mega-links">
                    <li><a href="{{ route('tution_fee') }}">Tution Fee</a></li>
                    <li><a href="{{ route('payment_guidelines') }}">Payment Guidelines</a></li>
                    <li><a href="{{ route('scholarship') }}">Local Students</a></li>
                    <li><a href="{{ route('scholarship') }}">International Students</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="me-3 pt-1"><a href="{{ route('home_notices') }}">Notice</a></li>
          <li class="me-3 pt-1"><a href="{{ route('news') }}">News</a></li>
          <li class="me-3 pt-1"><a href="{{ route('events') }}">Events</a></li>
          <li class="me-3 pt-1"><a href="{{ route('internship') }}">Internship</a></li>
          <li class="me-3 pt-1"><a href="{{ route('scholarship') }}">Scholarship</a></li>
          <li class="pt-1">
            <a href="{{ route('contact') }}" class="desktop-item">Contacts</a>
            <input type="checkbox" id="showDrop1">
            <label for="showDrop1" class="mobile-item">Contacts</label>
            <ul class="drop-menu">
              <li ><a href="{{ route('guestmessage') }} ">President Message</a></li>
              <li ><a href="{{ route('guestmessage_coo') }}">COO Message</a></li>
              <li ><a href="{{ route('guestmessage_vp') }}">Vice Principal Message</a></li>
            </ul>
          </li>
          <li class="me-3 pt-1"><a href="{{ route('career_page') }}">Career</a></li>
          <li class="me-3 pt-1"><a href="{{ route('home_alumni') }}">Alumni</a></li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
      </div>
    </nav>
    {{--nav end--}}
  </header>        
        
