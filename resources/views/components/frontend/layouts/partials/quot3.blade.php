<style>
  .heading {
    text-align: center;
    color: #454343;
    font-size: 30px;
    font-weight: 700;
    position: relative;
    margin-bottom: 70px;
    text-transform: uppercase;
    z-index: 999;
  }

  .white-heading {
    color: #ffffff;
  }

  .heading:after {
    content: ' ';
    position: absolute;
    top: 100%;
    left: 50%;
    height: 40px;
    width: 180px;
    border-radius: 4px;
    transform: translateX(-50%);
    background: url(img/heading-line.png);
    background-repeat: no-repeat;
    background-position: center;
  }

  .white-heading:after {
    /* background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png); */
    background-repeat: no-repeat;
    background-position: center;
  }

  .heading span {
    font-size: 18px;
    display: block;
    font-weight: 500;
  }

  .white-heading span {
    color: #ffffff;
  }

  /*-----Testimonial-------*/

  .testimonial:after {
    position: absolute;
    top: -0 !important;
    left: 0;
    content: " ";
    background: url(img/testimonial.bg-top.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
  }

  .testimonial {
    min-height: 375px;
    position: relative;
    /* background: url({{ asset('ui/frontend/images/slider/sbfban.png') }}); */
    background-color: #48A14D;
    padding-top: 50px;
    padding-bottom: 50px;
    background-position: center;
    background-size: cover;
  }

  #testimonial4 .carousel-inner:hover {
    cursor: -moz-grab;
    cursor: -webkit-grab;
  }

  #testimonial4 .carousel-inner:active {
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
  }

  #testimonial4 .carousel-inner .item {
    overflow: hidden;
  }

  .testimonial4_indicators .carousel-indicators {
    left: 0;
    margin: 0;
    width: 100%;
    font-size: 0;
    height: 20px;
    bottom: 15px;
    padding: 0 5px;
    cursor: e-resize;
    overflow-x: auto;
    overflow-y: hidden;
    position: absolute;
    text-align: center;
    white-space: nowrap;
  }

  .testimonial4_indicators .carousel-indicators li {
    padding: 0;
    width: 14px;
    height: 14px;
    border: none;
    text-indent: 0;
    margin: 2px 3px;
    cursor: pointer;
    display: inline-block;
    background: #ffffff;
    -webkit-border-radius: 100%;
    border-radius: 100%;
  }

  .testimonial4_indicators .carousel-indicators .active {
    padding: 0;
    width: 14px;
    height: 14px;
    border: none;
    margin: 2px 3px;
    background-color: #9dd3af;
    -webkit-border-radius: 100%;
    border-radius: 100%;
  }

  .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
    height: 3px;
  }

  .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
    background: #eeeeee;
    -webkit-border-radius: 0;
    border-radius: 0;
  }

  .testimonial4_control_button .carousel-control {
    top: 175px;
    opacity: 1;
    width: 40px;
    bottom: auto;
    height: 40px;
    font-size: 10px;
    cursor: pointer;
    font-weight: 700;
    overflow: hidden;
    line-height: 38px;
    text-shadow: none;
    text-align: center;
    position: absolute;
    background: transparent;
    border: 2px solid #ffffff;
    text-transform: uppercase;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
    transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
  }

  .testimonial4_control_button .carousel-control.left {
    left: 7%;
    top: 50%;
    right: auto;
  }

  .testimonial4_control_button .carousel-control.right {
    right: 7%;
    top: 50%;
    left: auto;
  }

  .testimonial4_control_button .carousel-control.left:hover,
  .testimonial4_control_button .carousel-control.right:hover {
    color: #000;
    background: #fff;
    border: 2px solid #fff;
  }

  .testimonial4_header {
    top: 0;
    left: 0;
    bottom: 0;
    width: 550px;
    display: block;
    margin: 30px auto;
    text-align: center;
    position: relative;
  }

  .testimonial4_header h4 {
    color: #ffffff;
    font-size: 30px;
    font-weight: 600;
    position: relative;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  .testimonial4_slide {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 70%;
    margin: auto;
    padding: 20px;
    position: relative;
    text-align: center;
  }

  .testimonial4_slide img {
    top: 0;
    left: 0;
    right: 0;
    width: 136px;
    height: 136px;
    margin: auto;
    display: block;
    color: #f2f2f2;
    font-size: 18px;
    line-height: 46px;
    text-align: center;
    position: relative;
    border-radius: 50%;
    box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
  }

  .testimonial4_slide p {
    color: #ffffff;
    font-size: 20px;
    line-height: 1.4;
    margin: 40px 0 20px 0;
  }

  .testimonial4_slide h4 {
    color: #ffffff;
    font-size: 22px;
  }

  .testimonial .carousel {
    padding-bottom: 50px;
  }

  .testimonial .carousel-control-next-icon,
  .testimonial .carousel-control-prev-icon {
    width: 35px;
    height: 35px;
  }

  /* ------testimonial  close-------*/
</style>
<section class="testimonial text-center">
  <div class="container">

    <div class="heading white-heading ">
      Guest say about us
    </div>
    <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

      <div class="carousel-inner" role="listbox">
        @foreach( $quotations as $quotation )
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div class="testimonial4_slide">
            <img src="{{ asset('storage/quotations/'.$quotation->img) }}" alt=" {{ $quotation->title }}" class="img-circle img-responsive" />
            <p>{{ $quotation->quotation }} </p>
            <h4>{{ $quotation->author_name }}</h4>
            <h5 style="color: #fff">{{ $quotation->title }}</h5>
          </div>
        </div>
        @endforeach
        {{-- <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                          <h4>Client 2</h4>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                          <h4>Client 3</h4>
                      </div>
                  </div> --}}
      </div>
      <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial4" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
</script>
<script>
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 2000
    })
  });
</script>