{{-- PULSANTE CREA --}}
@auth
<a href="{{route('announcement.create')}}">
    <div class="btn-add-annuoncement" >
        <p class="m-0">
            <span class="span-add-btn-small" >{{__('ui.btnAdd')}}</span> <span class="span-add-btn-plus">+</span>
        </p>
    </div>     
</a>
@endauth

@guest
{{-- <button data-bs-toggle="modal" class="colore-test" data-bs-target="#loginModal" >
    <div class="btn-add-annuoncement btn-add-annuoncement-guest" > --}}
<div  data-bs-toggle="modal" data-bs-target="#loginModal" >
    <div class="btn-add-annuoncement btn-add-annuoncement-guest" >
        <p class="m-0">
            <span class="span-add-btn-small" >{{__('ui.btnLog')}}</span> <span class="span-add-btn-plus">+</span>
        </p>
    </div>     
</div>   
@endguest
