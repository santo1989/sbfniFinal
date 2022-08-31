<div class="container">
  <div class="row">          
          
@forelse($alumnis as $alumni) 

          <div class="col-lg-4 col-md-4 col-sm-12 py-2">
              
            <div class="card">
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
           @break($loop->iteration == 3)
         
                        @empty
<div class="col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">No Alumni Found</h5>
        </div>
    </div>
</div>

@endforelse
 

        </div>
      </div>