<div class="details-carousel-mobile">
    
    <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center">
        <div class="carousel-indicators">
            @foreach ($carousel_file as $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="active" @if ($i==0) aria-current="true" @endif aria-label="Slide {{$i+1}}"></button>
            <div class="d-none">
                {{$i++}}
            </div>
            
            @endforeach
        </div>

        <div class="carousel-inner">

            @foreach ($carousel_file as $item)
          <div class="carousel-item @if ($h==0) active @endif">
            <div class="d-none">
              {{$h++}}
            </div>
            <img src="/media/carousel/{{$item}}" class="carousel-img d-block w-100 rounded-4" alt="">
          </div>
          @endforeach


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
</div>
