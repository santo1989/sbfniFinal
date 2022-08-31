
<section   style="padding-top: 80px; background-color:#666633; padding-bottom: 80px"  >
<h1 class="main text-center text-white"><b>Visitors Say About Us </b></h1>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top: 80px; padding-bottom:30px; padding-left:200px;">

  <ol class="carousel-indicators">
   @foreach( $quotations as $quotation )
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   @endforeach
  </ol>

  <div class="carousel-inner" role="listbox" >
    @foreach( $quotations as $quotation )
       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div class="col-md-3 col-sm-12">
           <img class="d-block img-circle " src="{{ asset('storage/quotations/'.$quotation->img) }}" alt=" {{ $quotation->title }} "style="height: 200px; width: 200px;">
          </div>
              <div class="carousel-caption d-none d-md-block col-md-9 col-sm-12" >
                <h4 class="text-white"> {{ $quotation->author_name }}</h4>
                 <h5 class="text-white"> {{ $quotation->title }}</h5>
                 <p><cite><h6 class="text-white"> <q> {{ $quotation->quotation }}</q> </h6> </cite></p>
              </div>
       </div>
    @endforeach
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