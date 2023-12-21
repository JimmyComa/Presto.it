<x-layout>

    <div class="marginTitle"></div>

 
    @if ($category)
    <div class="container-fluid px-5">
        <div class="row justify-content-center">
            <h1 class="my-5 fc-red text-center">{{ $category->name }}</h1>
            @forelse ($announcements as $announcement)
                <x-card :announcement='$announcement' />

            @empty
            <header class="container-fluid vh-100 d-flex justify-content-center align-items-center">
                <div class="row justify-content-center align-items-center flex-column flex-md-row">
                    <div class="col-5 d-flex justify-content-center">
                    <h1 class="fc-red">Nessun annuncio in questa categoria</h1>
                    </div>
                    <div class="col-7 d-flex justify-content-center">
                        <img class="not-found" src="/media/not-found.png" alt="">
                    </div>
                </div>
        </header>

            @endforelse
        </div>
    </div>
@else
<header class=" container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center flex-column flex-md-row">
            <div class="col-5 d-flex justify-content-center">
                <h1 class="fc-red" >CATEGORIA INESISTENTE</h1>
            </div>
            <div class="col-7 d-flex justify-content-center">
                <img class="not-found" src="/media/not-found.png" alt="">
            </div>
        </div>
</header>
@endif
</x-layout>
