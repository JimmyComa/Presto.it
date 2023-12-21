<nav class="navbar navbar-expand-lg fixed-top navbar-static">
    <div class="container-fluid">

        {{-- LOGO --}}
        <a class="navbar-brand d-flex align-items-baseline LogoPosition LogoAncor fc-darkblue" href="{{ route('home') }}">
            <svg id="Livello_2" data-name="Livello 2" xmlns="http://www.w3.org/2000/svg" class="logo "
                viewBox="0 0 259.47 301">
                <g id="Livello_2-2" data-name="Livello 2">
                    <path
                        d="m249.15,69.79c-.85-1.76-1.76-3.48-2.7-5.17,0,0,0,0,0,0,0,0-4.77-11.39-19.12-24.64-14.56-13.84-33.75-24.23-57.57-31.19-.1-.03-.2-.06-.3-.09-.1-.03-.19-.05-.29-.08-.87-.25-1.74-.49-2.62-.73-59.58-16.66-99.85-1.69-99.85-1.69,0,0-.01.01-.03.03-2.48.73-4.94,1.49-7.34,2.34-10.31,3.64-19.8,8.4-28.48,14.27-8.68,5.88-15.76,13.33-21.23,22.36C4.14,54.22.94,64.22.02,75.18c-.09,1.94.05,4.81.42,8.6.37,3.8.64,6.24.81,7.32.16,6.05,2.58,11.18,7.25,15.38,4.67,4.21,10.03,6.22,16.08,6.06,8.44-.48,14.77-3.39,19-8.7,4.23-5.31,5.85-11.28,4.85-17.91-1-6.63-4-11.88-9.01-15.78-3.12-2.51-1.56-7.4,4.7-14.68,6.26-7.27,15.88-13.64,28.86-19.11,5.65-2.38,11.26-3.97,16.84-4.79,12.7-1.12,24.04-.03,34.11,2.39-.06-.12-.15-.22-.19-.36.49.03.79.22.95.55,18.5,4.6,32.55,13.77,42.29,22.26,3.57,3.65,7.69,8.66,12.07,15.46-.41.29-.63.48-.63.48.06.01.13.03.19.06-.52.11-1.01.41-1.33.89-2.47,3.69.07-.56-3.47,7.76-3.97,9.32-.32,8.02,1.12,7.22,0,0,1.19-.33,2.54-3.83,1.16.36,2,1.7,1.28,3.06-20.91,39.54-8.58,47.67,3.08,48.37-4.38,10.11-10.28,19.08-17.73,26.86-3.88,4.05-8.19,7.62-12.92,10.71-9.55,6.24-21.25,8.7-32.34,6.03-14.38-3.46-22.39-13.5-26.7-21.87-1.41-3.64-3-8.11-4.59-12.71h0c-2.27-6.58-4.51-13.4-6.11-18.35-.54-1.66-2.95-1.39-3.13.34l-2.12,20.71s-22.62,10.7-31.08,9.67c-5.19-.63-14.65-7.59-21.21-12.88-2.03-1.64-4.93.38-4.09,2.84.63,1.86,1.27,3.73,1.91,5.62,13.68,40.24,50.09,68.69,92.5,71.48.5.03.98.06,1.44.08,1.78.18,3.54.34,5.29.46.05,0,.11.01.16.02,3.47.71,4.96.65,5.47.3,21.47.86,41.43-2.42,59.86-9.91,30.96-12.83,52.51-33.92,64.67-63.28,11.77-28.35,11.12-55.76-1.96-82.21ZM6.53,77.39c.4-.2.81-.1,1.21.3-.61.2-1.02.1-1.21-.3Zm1.82,6.08c-.2-.2-.2-.4,0-.61h.3c-.2.21-.3.41-.3.61Zm6.69-5.17v.3c-.2,0-.41-.1-.61-.3h.61Zm-.61,10.64c-.41.21-.81.41-1.22.61-.41-.81-.61-1.26-.61-1.37,0-.1.61-.96,1.82-2.58.2,0,.35.1.46.3.1.21.25.46.46.76.2.3.4.66.61,1.06-.41.2-.91.61-1.52,1.21ZM77.88,15.48c.65-1.29,1.35-1.92,2.11-1.88-.63.92-1.33,1.54-2.11,1.88Zm19.02,4.96c.09.1-.16.23-.74.39-.18-.2-.25-.59-.22-1.16l.08-1.43c-.18-.2-.65-1.94-1.41-5.23l1.71.1c1.99,1.84,1.89,3.55-.3,5.13.49,1.37.79,2.1.87,2.2Zm-33.01,164.67l-2.87,2.33c-.81.66-2,.53-2.65-.28l-6.92-8.52c-.66-.81-.53-2,.27-2.65l2.87-2.33c.81-.66,2-.53,2.65.27l6.92,8.52c.66.81.53,1.99-.27,2.65Zm7.98.23c.65-1.3,1.35-1.92,2.11-1.88-.62.92-1.33,1.54-2.11,1.88Zm10.13-10.41l-2.87,2.33c-.81.66-2,.53-2.65-.28l-6.92-8.52c-.66-.81-.53-2,.27-2.65l2.87-2.33c.81-.66,2-.53,2.65.27l6.92,8.52c.66.81.53,1.99-.27,2.65Zm8.89,15.37c.09.1-.16.23-.74.39-.18-.2-.25-.59-.22-1.16l.08-1.43c-.17-.2-.65-1.94-1.41-5.23l1.71.1c1.99,1.84,1.89,3.55-.3,5.13.49,1.37.79,2.1.87,2.2Zm32.38,21.78c-4.73,3.12-10.88,1.85-15.92.34,0,0,.09-.35.09-.35,4.71.56,14.86,1.89,16.5-3.84-.04-.34-.4-.45-.75-.6-3.08-.85-6.42-.33-9.63-1.34l.08-.36c3.27.26,6.68-.61,10.03.18,3.4.9,1.61,4.55-.41,5.97Zm-5.53-8.64c.76.05,1.12.45,1.07,1.21-.56-.22-.91-.62-1.07-1.21Zm10.9-7.04c-5.04,1.47-10.31-.5-14.86-2.51l.15-.33c4.52,1.6,9.65,3.32,14.36,1.89,1.21-.42,2.88-1.69,2.97-2.91-.29-1.2-2.54-1.53-3.69-1.87-3.24-.78-7.01-.8-9.51-3.36-1.21-1.15-2.74-2.63-2.35-4.49,0,0,.36.09.36.09-.12.75.28,1.5.75,2.12,1.01,1.24,2.37,2.26,3.77,3.02,2.29.93,4.8.96,7.22,1.55,1.65.45,4.21.77,4.53,2.87-.14,1.99-2.04,3.27-3.7,3.93Zm32.99-8.1l-.24-.52c.25.09.42.02.52-.24-.09.25-.02.42.24.52l-.52.24Zm59.89-79.3c.47,1.04.99,1.96,1.56,2.74l-2.69.28-1.09-1.7c.09-.25.83-.69,2.22-1.32Zm-3.4,12.52c-1.29.38-2,.54-2.13.5-.13-.05-.63-.81-1.51-2.29,1.19-.12,2.41.47,3.64,1.8Zm-52.9,52.6c-.57-.78-.8-1.3-.71-1.56l.52-.24c.44-.41.86-.39,1.28.05.15.35.31.7.47,1.04-.7.32-1.22.55-1.56.71Zm40.85-82.55c-.35.16-.73.23-1.16.21-.43-.01-.59-.15-.5-.4-.1-2.04-.23-4.4-.38-7.04l1.94-.57c.88,3.78,1.43,6.14,1.66,7.09.15.35-.37.58-1.56.71Zm16.74,73.54c1.38,1.13,2.87,2.13,4.49,2.87.51.22,1.05-.01,1.49-.29.26-.14.3-.33,1.04-.4.46.61.06,1.05-.26,1.36-1.06.99-2.6.5-3.75-.04-4.16-1.93-7.81-4.81-10.61-8.51-6.4-8.51-3.43-18.49,3.85-25.29,6.57-6.16,14.74-10.12,23.06-13.32-17.44,8.93-40.54,24.59-19.32,43.61Z" />
                    <path
                        d="m67.64,218.48c-.17-.47-.19-.94-.07-1.41-15.1-7.98-25.75-19.27-31.25-26.03-2.18-2.14-3.71-4.1-4.31-5.77-3.36,24.28-6.99,49.99-10.89,77.15-.81,6.08-1.82,13.13-3.04,21.14-1.42,8.85-2.03,13.96-1.82,15.34.2,1.38,1.42,2.07,3.65,2.07h47.12c2.63.27,3.95-1.38,3.95-4.97,0-1.66,2.74-23.35,8.21-65.09.2-1.93.46-3.32.76-4.14.3-.83.86-1.31,1.67-1.45.81-.13,1.72-.21,2.74-.21s2.74-.07,5.17-.21c-7.99-1.54-15.23-4.31-21.67-7.68.16.42.09.84-.22,1.25m-11.86,22.39v.42c-.2,0-.41-.14-.61-.42h.61Zm-8.51-1.24c.4-.27.81-.13,1.22.41-.61.28-1.02.14-1.22-.41m.91-4.56c-.2-.27-.51-.55-.91-.83-.41-.55-.41-1.52,0-2.9v-1.24c.2,0,.4-.06.61-.21.2-.14.4-.34.61-.62l.61,1.66c.2.83,0,1.94-.61,3.32-.2.28-.3.56-.3.83m.91,12.85c-.2-.27-.2-.55,0-.83h.3c-.2.28-.3.56-.3.83m6.08,7.46c-.41.28-.81.56-1.22.83-.41-1.1-.61-1.72-.61-1.87,0-.14.61-1.31,1.82-3.52.2,0,.35.14.46.41.1.28.25.62.46,1.04.2.41.4.9.61,1.45-.41.28-.91.83-1.52,1.66" />
                </g>
            </svg>
            <span class="f-RetroKing fc-gray logo-word fa-2x">resto</span>
        </a>

        {{-- PULSANTE PER VERSIONE MOBILE --}}
        <button class="navbar-toggler fc-darkblue mx-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fc-darkblue"></span>
        </button>

        {{-- PARTE ESTESA --}}
        <div class="collapse navbar-collapse border-color" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                {{-- LINK ANNUNCI --}}
                <li class="nav-item ">
                    <a class="nav-link links fs-4 fc-darkblue" href="{{ route('announcements.index') }}">
                        {{ __('ui.navbarAllAnnouncements') }}</a>
                </li>

                {{-- CATEGORIE --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fc-darkblue links fs-4" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.navbarCategory') }}
                    </a>

                    <ul>

                        <div class="dropdown-menu bg-red p-0" aria-labelledby="categoriesDropdown">

                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item fc-darkblue bg-red brdBottom"
                                        href="{{ route('category.filter', compact('category')) }}">
                                        @if (session('locale') == 'it')
                                            {{ $category->name }}
                                        @else
                                            {{ __('ui.' . $category->name) }}
                                        @endif
                                    </a>
                                </li>
                            @endforeach

                        </div>
                    </ul>
                </li>

                {{-- RICERCA --}}
                <li class="bgWhite rounded-5 search">
                    <form action="{{ route('announcements.search') }}" method="GET" class="d-flex ms-2">
                        <input name="searched" class="form-control me-2" type="search"
                            placeholder="{{ __('ui.navbarSearch') }}" aria-label="Search">
                        {{-- <button class="btn" type="submit">Cerca</button> --}}
                        <button class="btn btnSearchNavbar"><i class="fa-solid fa-magnifying-glass fc-darkblue"></i></button>
                    </form>
                </li>
            </ul>


        </div>

        <div class="UserPosition">

            {{-- DROPDOWN --}}
            @auth
                <li class="nav-link dropdown ">
                    <a class="btn border-0 dropdown-toggle-2" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-lg-end bg-red p-0">
                        <li class="d-flex justify-content-center brdBottom">
                            <a class="btn fc-darkblue border-0 bg-red "
                                href="{{ route('announcement.create') }}">{{ __('ui.btnAdd') }}</a>
                        </li>
                        @if (Auth::user()->is_revisor)
                            <li class="brdBottom">
                                <a href="{{ route('revisor.index') }}" class="btn border-0 w-100">{{ __('UI.revisorLink') }}
                                    <span>({{ App\Models\Announcement::toBeRevisionedCount() }})</span>
                                </a>
                            </li>
                        @endif
                        <li class="d-flex justify-content-center">
                            <form action="{{ route('logout') }}"method="post">
                                @csrf
                                <button class="btn border-0 test px-5">Logout</button>
                            </form>
                        </li>
                    </ul>

                </li>
                </li>
            @else
                <li class="dropdown-center">
                    <a class=" d-flex align-items-center nav-link links fs-2 dropdown-toggle fc-darkblue" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- <i class="fa-solid fa-cat"></i> --}}
                        {{-- <i class="fa-regular fa-user"></i> --}}
                        <h4 class="mb-0 mx-3">{{__('ui.navbarLogin')}}</h4>
                        <svg id="Livello_2" data-name="Livello 2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 209.68 209.68" class="logoUser">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                        stroke: #f2f2f2;
                                        stroke-miterlimit: 10;
                                        stroke-width: 1.53px;
                                    }

                                    .cls-2 {
                                        fill: #f2f2f2;
                                    }

                                    .cls-3 {
                                        fill: #144b5f;
                                    }
                                </style>
                            </defs>
                            <g id="Livello_3" data-name="Livello 3">
                                <g>
                                    <path class="cls-2"
                                        d="m150.71,97.31h0c2.83-10.71,5.9-21.7,8.17-29.67.76-2.66-2.67-4.46-4.43-2.32l-21.15,25.51s-39.38-5.89-49.66-14.75c-6.3-5.43-12.65-23.01-16.63-35.82-1.23-3.96-6.86-3.87-7.93.13-.81,3.02-1.62,6.06-2.45,9.12-10.17,37.84-6.73,77.19,8.37,111.64,29.26-.16,58.55.23,87.5-2.92-7.58-14.01-8.3-28.64-6.98-40.05,1.36-6.06,3.21-13.38,5.18-20.86Zm-56.55,39.59c2-1.14,3.48-1.34,4.46-.62-1.64.67-3.12.87-4.46.62Z" />
                                    <circle class="cls-1" cx="104.84" cy="104.84" r="104.07"
                                        transform="translate(-43.43 104.84) rotate(-45)" />
                                    <path class="cls-3"
                                        d="m82.74,129.63l-3.72.34c-2.24.21-4.22-1.44-4.43-3.68l-1.41-15.26c-.21-2.24,1.44-4.22,3.68-4.43l3.72-.35c2.24-.2,4.22,1.44,4.43,3.68l1.41,15.26c.2,2.24-1.44,4.22-3.68,4.43" />
                                    <path class="cls-3"
                                        d="m115.7,132.2l-3.72.34c-2.24.21-4.22-1.44-4.43-3.68l-1.41-15.26c-.21-2.24,1.44-4.22,3.68-4.43l3.72-.35c2.24-.2,4.22,1.44,4.43,3.68l1.41,15.26c.2,2.24-1.44,4.22-3.68,4.43" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end bg-red p-0">
                        <li class="d-flex justify-content-center flex-column">
                            <button class="w-100 btn border-0" data-bs-toggle="modal" data-bs-target="#registerModal"
                                id="btnRegister">{{ __('ui.signIn') }}</button>
                            <button class="w-100 btn border-0" data-bs-toggle="modal"
                                data-bs-target="#loginModal">{{ __('ui.logIn') }}</button>
                        </li>
                    </ul>
                </li>
            @endauth

        </div>
    </div>
</nav>
