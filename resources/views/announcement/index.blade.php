<x-layout>

    <div class="marginTitle">

    </div>
     {{-- CARD --}}
     <div class="container-fluid">
        <div class="row justify-content-center">
            <h1 class="fc-red text-center my-5">{{ __('ui.AllAnnouncements') }}</h1>
            @forelse ( $announcements as $announcement )
                <x-card :announcement='$announcement'/>
                @empty 
                <div>
                    <h2>{{ __('ui.ThereAreNoAnnouncements') }}</h2>
                </div>
            @endforelse
            
        </div>
    </div>
        

</x-layout>