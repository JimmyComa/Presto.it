{{-- <div>
    <pre class="m-0 row-4">                 ▄▄▄████▄▄▄</pre>
    <pre class="m-0 row-3">             ▄▄██████████████▄▄</pre>
    <pre class="m-0 row-2">        ▄▄▄██████████████████████▄▄▄</pre>
    <pre class="m-0 row-1"> ▄▄▄▄██████████████████████████████████▄▄▄▄</pre>
</div> --}}
<div class="container-fluid p-0">
<footer class="py-3 mt-4 bg-red ">

    {{-- LISTA PAGINE 1 --}}
    <ul class="nav justify-content-center align-items-center border-bottom pb-3 mb-3 ">
        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 links fs-4 fc-darkblue">Home</a></li>
        <li class="nav-item">

            <form action="{{route('become.revisor')}}" method="GET">
                @csrf
    
                <button class="btn btnFooter fs-4 mx-1 border-0" type="submit">{{__('ui.WorkWithUs')}}</button>
                </form>
            {{-- <a href="{{route('revisor.wwu')}}" class="nav-link px-2 links fs-4 fc-darkblue">{{__('ui.WorkWithUs')}}</a> --}}
        </li>
        <li>
            <x-_locale lang="it"/>
            <x-_locale lang="en"/>
            <x-_locale lang="es"/>
            <x-_locale lang="fr"/>
        </li>
    </ul>

    {{-- BOH UN PARAGRAFO --}}
    <p class="text-center  fs-4 fc-darkblue">© 2022 Company, Inc</p>
</footer>
</div> 