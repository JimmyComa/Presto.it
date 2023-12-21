<x-layout>
    
    <header class="d-flex justify-content-center align-items-center flex-column vh-100 mt-5">
        <h1 class="fc-red mt-5 pt-5" > {{ $announcement_to_check ? "Hai  $announcements_count  annunci da revisionare" : 'Non ci sono annunci da revisionare' }}
        </h1>
        @if (session('message'))
        <div class="alert alert-success text-center rounded-5">{{ session('message') }}</div>
        @endif
        @if ($announcement_to_check)
        <div class="container-fluid">
            
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-3 mx-5">
                    <div class="card-revisor glass-card align-items-center mt-5" >
                        
                        
                        <div id="carouselWrap">
                            <x-carousel :announcement='$announcement_to_check'/>
                        </div>
                        
                        <div class="card-body g-3">
                            <h5 class="card-title fs-1 fc-red textBlur">{{ $announcement_to_check->title }}</h5>
                            <p class="card-text fs-3 textBlur"> {{ $announcement_to_check->price }} €</p>
                            <p class="card-text fs-4 textBlur"> {{ $announcement_to_check->created_at }}</p>
                            
                            {{-- categoria --}}
                            <a href="{{ route('category.filter', ['category' => $announcement_to_check->category]) }}"class="text-decoration-none fc-darkblue">
                                @if(session('locale')=='it') {{ $announcement_to_check->category->name }} @else {{__('ui.'.$announcement_to_check->category->name)}}@endif  
                            </a>
                            
                            
                            <div class="d-flex justify-content-between align-items-end px-1">
                                <a href="{{ route('user.filter', ['user' => $announcement_to_check->user]) }}"class="fs-5 text-decoration-none fc-darkblue">Creato da:{{ $announcement_to_check->user->name }}</a>
                            </div>
                            
                            {{-- ACCETTA --}}
                            <div class="col-12 d-flex justify-content-between">
                                <form method="POST" action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn" type="submit">Accetta</button>
                                </form>
                                
                                <form method="POST" action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn" type="submit">Rifiuta</button>
                                </form>
                            </div>
                        </div>
                        
                        @endif
                        {{-- ANNULLA --}}
                        <div>
                            
                            <form method="POST" action="{{ route('revisor.undo_last_announcement') }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn" type="submit">Annulla ultima azione</button>
                            </form>
                        </div>
                    </div>
                </div>
                @if(isset($announcement_to_check->images))
                @foreach($announcement_to_check->images as $image)
                <div class="col-12 col-md-3 mt-2 mt-md-0 semaforo d-none">
                    <h5 class="fc-red">Revisione immagini</h5>
                    @if (($image->labels))
                    
                    <p class="fc-red">
                        @foreach ($image->labels as $label)
                        {{ $label }},
                        @endforeach
                    </p>

                    @endif
                    
                    <p class="fc-red">Adulti: <span class="{{ $image->adult }}"></span></p>
                    
                    <p class="fc-red">Satirà: <span class="{{ $image->spoof }}"></span></p>
                    
                    <p class="fc-red">Medicina: <span class="{{ $image->medical }}"></span></p>
                    
                    <p class="fc-red">Violenza: <span class="{{ $image->violence }}"></span></p>
                    
                    <p class="fc-red">Contenuto sessuale: <span class="{{ $image->racy }}"></span></p>
                
                </div>
                @endforeach
                @endif
            </div>
        </div>
        
        {{-- Cronologia --}}
        {{-- <h2>cronologia</h2>
            <div class="container">
                <div class="row">
                    @forelse ($revisorAction as $action)
                    <p class="col-3 fc-red text-center">Titolo: {{$action->announcement->title}}</p>
                    <p class="col-3 fc-red text-center">Azione: {{$action->action ? 'accettato' : 'rifiutato'}}</p>
                    <p class="col-3 fc-red text-center">Creato da: {{$action->announcement->user->name}}</p>
                    <div class="col-3">
                        <form method="POST" action="{{ route('revisor.undo_announcement',compact('action')) }}">
                            @csrf
                            @method('PATCH')
                            <button class="btn" type="submit">Annulla</button>
                        </form>
                    </div>
                    @empty
                    
                    @endforelse
                </div>
            </div> --}}
        </header>
        
        <div class="container-fluid mt-5 pt-5">
            <div class="row justify-content-center">
                
                
                {{-- acettati --}}
                <div class="col-5">
                    <h2 class="fc-red text-center">Annunci accettati</h2>
                    <div class="row">
                        @foreach ( $announcements_true as $announcement )
                        <div class="col-12 col-md-6 my-4">
                            <div class="card @if($announcement->is_accepted) glassGreen @else glassRed @endif " >
                                <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,300) : 'media/defaultAnnouncement.png'}}"class="card-img-top" alt="..."> 
                                <div class="card-body text-end pe-4 fc-red">
                                    <h5 class="card-title fs-3">{{$announcement->title}}</h5>
                                    <strong class="card-text fs-4"> {{$announcement->price}} €</strong>
                                    <p class="card-text fs-5 "> {{$announcement->created_at}}</p>
                                    
                                    {{-- categoria --}}
                                    <a href="{{route('category.filter',['category' => $announcement->category])}}" class="text-decoration-none fw-bold fc-darkblue">
                                        <div class="d-none">
                                            {{$test=$announcement->category}}
                                        </div>
                                        @if(session('locale')=='it') {{ $test->name }} @else {{__('ui.'.$test->name)}}@endif  
                                    </a>
                                    
                                    <div class="d-flex justify-content-between align-items-end px-1">
                                        <form method="POST" action="{{ route('revisor.undo_announcement',compact('announcement')) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn" type="submit">Annulla</button>
                                        </form>
                                        <a href="{{route('user.filter',['user' => $announcement->user])}}" class="fs-5 text-decoration-none fc-darkblue">Creato da: {{$announcement->user->name}}</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-1">
                    
                {{-- rifiutati --}}
                </div>
                <div class="col-5">
                    <h2 class="fc-red text-center">Annunci rifiutati</h2>
                    <div class="row">
                        @foreach ( $announcements_false as $announcement )
                        <div class="col-12 col-md-6 my-4">
                            <div class="card @if($announcement->is_accepted) glassGreen @else glassRed @endif " >
                                <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(300,300) : 'media/defaultAnnouncement.png'}}"class="card-img-top" alt="..."> 
                                <div class="card-body text-end pe-4 fc-red">
                                    <h5 class="card-title fs-3">{{$announcement->title}}</h5>
                                    <strong class="card-text fs-4"> {{$announcement->price}} €</strong>
                                    <p class="card-text fs-5 "> {{$announcement->created_at}}</p>
                                    
                                    {{-- categoria --}}
                                    <a href="{{route('category.filter',['category' => $announcement->category])}}" class="text-decoration-none fw-bold fc-darkblue">{{$announcement->category->name}}</a>
                                    
                                    <div class="d-flex justify-content-between align-items-end px-1">
                                        <form method="POST" action="{{ route('revisor.undo_announcement',compact('announcement')) }}">
                                            @csrf
                                            @method('PATCH')
                                            <button class="btn" type="submit">Annulla</button>
                                        </form>
                                        <a href="{{route('user.filter',['user' => $announcement->user])}}" class="fs-5 text-decoration-none fc-darkblue">Creato da: {{$announcement->user->name}}</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
        
    </x-layout>
    