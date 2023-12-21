<div class="col-12 col-md-4 my-3 card-wrapper">

    <div class="card cart-style">
        {{-- IMG --}}
        <img src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(300, 300): 'media/defaultAnnouncement.png' }}"class="card-img-top"
            alt="...">
        <div class="card-body p-3 fc-red">
            {{-- TITOLO --}}
            <h5 class="card-title">{{ $announcement->title }}</h5>
            {{-- categoria --}}
            <a href="{{ route('category.filter', ['category' => $announcement->category]) }}"
                class="links text-decoration-none card-category">
                @if (session('locale') == 'it')
                    {{ $announcement->category->name }}
                @else
                    {{ __('ui.' . $announcement->category->name) }}
                @endif
            </a>
            <div class="d-flex justify-content-between pt-2 align-items-center">
                {{-- PREZO --}}
                <strong class="card-price card-text">€ {{ $announcement->price }}</strong>
                {{-- DATA --}}
                <div class="d-flex flex-column align-items-end">
                    <p class="card-data d-md-block d-none "> {{ $announcement->created_at }}</p>
                    <a href="{{ route('user.filter', ['user' => $announcement->user]) }}" class=" text-decoration-none fc-darkblue card-data d-md-block d-none ">
                        {{ __('ui.CreatedBy') }}: {{ $announcement->user->name }}
                    </a>
                    {{-- BTN VEDI ALTRO --}}
                    <div class="d-flex justify-content-between align-items-end px-4 my-2">
                        <a href="{{ route('announcement.show', compact('announcement')) }}" class="btn-card p-1">
                            {{ __('ui.seeAll') }}...
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
