<x-layout>

    <div class="marginTitle"></div>

    @if ($user)
        
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <h1 class="my-5 fc-red text-center">{{ $user->name }}</h1>
            @forelse ($announcements as $announcement )
                <x-card :announcement='$announcement'/>
            @empty
                <div class="marginTitle text-center fc-red">
                    <h1>NON C'E' UN GATTO</h1>
                </div>                
            @endforelse
        </div>
    </div>
    @else
    <div>
        <h1 class="fc-red text-center vh-100">UTENTE INESISTENTE</h1>
    </div>
    @endif
</x-layout>