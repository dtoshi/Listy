<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="/media/Listy.png" alt="Bootstrap" width="50px" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Herramientas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Funcionalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Preguntas frecuentes</a>
                </li>
            </ul>
            @if(auth ()->check())
            <p>welcome <b> {{ auth()->user()->name }} </b></p>
            <ul class="navbar-nav btn-login ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.destroy') }}">Cerrar sesión</a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav btn-login ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.index') }}">Inicio sesión <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>