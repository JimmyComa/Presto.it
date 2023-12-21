<x-layout>
    <header class="vh-100 d-flex justify-content-center align-items-center flex-column">
        <h1 class="fc-red">LAVORA CON NOI</h1>
        <form action="{{route('become.revisor')}}" method="GET">
            @csrf

            <button class="btn" type="submit">CLICCA QUI</button>
            </form>
    </header>
</x-layout>