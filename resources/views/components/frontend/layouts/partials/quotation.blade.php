<section class="section novi-background bg-cover section-70 section-xl-100 section-xl-bottom-114 bg-madison context-dark position-relative">
  <div class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal-xl-owl-nav"
    data-items="1"
    data-nav="true"
    data-dots="true"
    data-nav-class='["owl-prev fa-angle-left", "owl-next fa-angle-right"]'>
    <div>
      <div class="shell">
          
        <div class="range range-xs-center range-xs-middle">
          <div class="cell-sm-9 cell-sm-push-1">
            
            @forelse ($quotations as $quotation )
            <div class="quote-classic-boxed text-center">
              <div class="quote-body">
                <q>{{ $quotation->quotation }}</q
                >
                <div class="offset-top-30 text-center">
                  <cite class="font-accent">{{ $quotation->author_name }}</cite>
                  <div class="offset-top-5">
                    <p class="text text-italic">
                      {{ $quotation->title }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
              
            
          </div>
          @empty
              <p> No Qutation Found </p>
            @endforelse
        </div>
      </div>
    </div>
    {{-- <div>
      <div class="shell">
        <div class="range range-xs-center range-xs-middle">
          <div class="cell-sm-9 cell-sm-push-1">
            <div class="quote-classic-boxed text-center">
              <div class="quote-body">
                <q
                  >When I researched the programmes available I realized
                  that the University was offering exactly the type of
                  programme in international development that interested
                  me.</q
                >
                <div class="offset-top-30 text-center">
                  <cite class="font-accent">Steven Alvarez</cite>
                  <div class="offset-top-5">
                    <p class="text-dark text-italic">
                      Diploma for Graduates in International Development,
                      USA
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
</section>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
    $('.veil-xl-owl-dots').veil({
      dots: true,
      dotsClass: 'owl-dots veil-xl-owl-dots veil-xl-owl-dots-default veil-xl-owl-dots-primary veil-xl-owl-dots-accent veil-xl-owl-dots-dark veil-xl-owl-dots-light veil-xl-owl-dots-white veil-xl-owl-dots-gray veil-xl-owl-dots-black veil-xl-owl-dots-primary-inverse veil-xl-owl-dots-accent-inverse veil-xl-owl-dots-dark-inverse veil-xl-owl-dots-light-inverse veil-xl-owl-dots-white-inverse veil-xl-owl-dots-gray-inverse veil-xl-owl-dots-black-inverse',
      dotsContainer: '.owl-dots'
    });
    $('.veil-owl-nav').veil({
      nav: true,
      navClass: 'owl-nav veil-owl-nav veil-owl-nav-default veil-owl-nav-primary veil-owl-nav-accent veil-owl-nav-dark veil-owl-nav-light veil-owl-nav-white veil-owl-nav-gray veil-owl-nav-black veil-owl-nav-primary-inverse veil-owl-nav-accent-inverse veil-owl-nav-dark-inverse veil-owl-nav-light-inverse veil-owl-nav-white-inverse veil-owl-nav-gray-inverse veil-owl-nav-black-inverse',
      navContainer: '.owl-nav'
    });
  });
</script>