<x-layout>

    
    <header class="vh-100 d-flex flex-column justify-content-center align-items-center cover">
        

        <div class="container ">
            
    <div class="row justify-content-center">

      <div class="row col-8 col-md-12 mt-5 glass myShadow">
        <div class="col-12 text-center textBlur homeHeaderDimension">
          <h1 class="fc-red  fa-2x">PRESTO.IT</h1>
          <pre class="m-0">      ▄▀▄     ▄▀▄      </pre>
          <pre class="m-0">     ▄█░░▀▀▀▀▀░░█▄     </pre>
          <pre class="m-0"> ▄▄  █░░░░░░░░░░░█  ▄▄ </pre>
          <pre class="m-0">█▄▄█ █░░▀░░┬░░▀░░█ █▄▄█</pre>
        </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
              <div class="col-12">
                @if (session('success') )
                <div class="alert alert-success text-center rounded-5 " >
                  {{ session ('success') }}
                </div>
                @elseif (session('failed') )
                <div class="alert alert-danger text-center rounded-5 " >
                  {{ session ('failed') }}
                </div>
                @endif
              </div>
            </div>
          </div>
    </header>
    
    {{-- CATEGORIE --}}
    <div class="container-fluid bg-red ">
      <div class="row">
          <div class="d-flex justify-content-center">
              <h2 class="my-4 fc-darkblue fa-3x">{{__('ui.navbarCategory')}}</h2>
          </div>
          <div class="row mt-1 justify-content-evenly">
              @foreach($categories as $category)
              <div class="col-6 col-sm-3 col-md-2 col-lg-1 my-3">
                  <a class="fw-bolder pallino text-center btn btnFooter border-0 fs-5 d-flex justify-content-center align-items-center flex-column" href="{{route('category.filter',compact('category'))}}">
                    <i class="fa-solid fs-2 textBlur fc-white fa-{{__("ui.$category->id")}}"></i>
                    {{($category->name)}}</a>
              </div>
              @endforeach
          </div>
      </div>
  </div>

    {{-- CARD --}}
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <h2 class="fc-red text-center mt-5 fa-5x">{{__('ui.latestAnnouncements')}}</h2>
            @foreach ( $announcements as $announcement )
                <x-card :announcement='$announcement'/>
            @endforeach
        </div>
    </div>
        

    
    
</x-layout>