<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Libreria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('book.create')}}">Inserisci libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lista libri</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav justify-content-end">
            @auth
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onlick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    <form action="{{route('logout')}}" method="POST" id="form-logout">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('login')}}">accedi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
