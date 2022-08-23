
<section   style="padding-top: 80px; background-color:#a4d3f7;"  >
    <h1 class="main text-center text-white"><b>Visitors Say About Us </b></h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top: 80px; padding-bottom:30px; padding-left:250px;">
    
      <ol class="carousel-indicators">
       @foreach( $alumnis as $alumni )
          <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
       @endforeach
      </ol>
    
      <div class="carousel-inner" role="listbox" >
        @foreach( $alumnis as $alumni )
           <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('storage/'.$alumni->image) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $alumni->name }}</h5>
                  <p class="card-text">{{ $alumni->current_position }}</p>
                </div>
              </div>

            {{-- <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 d-none d-lg-block">
              
                <div class="card ">
                    <img
                      src="{{ asset('storage/alumni/'.$alumni->img) }}"
                      class="card-img-top"
                      alt="{{ $alumni->name }}"
                    />
                    <div class="card-body">
                      <h5 class="card-title">{{ $alumni->name }}</h5>
                      <p class="card-text">
                        {{$alumni->current_position}}
                      </p>
                    </div>
                  </div>
              </div>
           </div> --}}
        @endforeach
           </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 2000
            })
        });
    </script>