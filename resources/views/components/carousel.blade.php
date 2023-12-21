<div class="details-carousel-mobile">
    
    <div id="carouselExampleIndicators" class="carousel slide d-flex justify-content-center">
        <div class="carousel-indicators">
            @foreach ($announcement->images as $key=>$item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="active" @if ($key==0) aria-current="true" @endif aria-label="Slide {{$key+1}}"></button>
            
            @endforeach
        </div>

        <div class="carousel-inner">
          
            @foreach ($announcement->images as $key=>$el)
            <div class="carousel-item w-100 @if($key==0) active @endif">
                <img src="{{$el->getUrl(300,300)}}" class=" d-block w-100 rounded-4" alt="">
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
<div class="testNumber"></div>