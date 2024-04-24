<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">Usuarios</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('hotel.index')}}">Hoteles</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Licencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Idiomas</a>
                </li>
                @auth
                <form method="POST" id="logout_form" action="{{ route('logout') }}">
                    @csrf
                    <li class="nav-item">

                    <a class="nav-link" href="{{route('logout')}}"
                                           onclick="document.getElementById('logout_form').submit();">
                        {{ __('Log Out') }}
                    </li>
                </form>
                @endauth
            </ul>
           {{-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>--}}

    </div>
</nav>

