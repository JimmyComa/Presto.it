<x-layout bgc='bg-gray'>
    
    @if ($announcement)
    @if ($announcement->is_accepted==1)        
    {{-- @dd($announcement->images) --}}
    <div class="container-fluid pt-5 vh-100 d-flex justify-content-center align-items-center">
        
        <div class="details-card">
            <div class="row g-0 justify-content-center align-items-center rounded-4">

                {{-- CAROSeLLO --}}
                <div class="col-md-6 details-carousel-mobile">
                    
                    <x-carousel :announcement='$announcement'/>
                    
                    <div>
                        <h1 class="card-title pt-3 text-start details-title pb-3">{{$announcement->title}}</h1>
                    </div>
                </div>

                {{-- DATI --}}
                <div class="col-md-4 height-card-details bg-gray rounded-4">
                    <div class="card-body h-100 raw d-flex flex-column justify-content-between fc-red rounded-5">
                        <div class="d-flex mb-5 flex-column align-items-start">
                            <div class="details-category">
                                <p class="">{{$announcement->category->name}}</p>
                            </div>
                            {{-- PREZZO --}}
                            <strong class="card-text text-center details-price my-4">€ {{$announcement->price}}</strong>
                            
                            <div class="d-flex justify-content-start">
                                <p class="fs-2 text-start fc-darkblue">DESCRIZIONE</p>
                            </div>
                            
                            {{-- condizione --}}
                            {{-- <p class="details-condition">Condizione: </p> --}}
                            
                            {{-- descrizione --}}
                            <p class="card-text text-start h-75 px-3 description-size pt-1 pb-3">{{$announcement->description}} </p>
                        </div>
                        <p class="card-text fs-5 text-end mt-5 pe-4 mb-5 pb-3"> Creato da:
                            <a href="{{route('user.filter',['user' => $announcement->user])}}" class="fw-bold text-decoration-none fc-red">{{$announcement->user->name}}</a> il {{$announcement->created_at}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(!isset($announcement->is_accepted))
    <header class="vh-100 d-flex justify-content-center align-items-center">
        <h1>
            Annuncio in attesa di revisione
        </h1>
    </header>
    @endif
    @if($announcement->is_accepted==false)
    <header class="vh-100 d-flex justify-content-center align-items-center">
        <h1>
            Annuncio rifiutato
        </h1>
    </header>
    @endif
    @else

    <header class=" container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center flex-column flex-md-row">
            <div class="col-5 d-flex justify-content-center">
                <h1>
                    Annuncio inesistente
                </h1>
            </div>
            <div class="col-7 d-flex justify-content-center">
                <img class="not-found" src="/media/not-found.png" alt="">
            </div>
        </div>
</header>
    @endif
    
    
</x-layout>