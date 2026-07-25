<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            Mi Sistema Laravel
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
                @if (Auth::check(Auth::User()))
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="nav-link" type="submit">Cerrar sesion</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Inicio de sesion</a>
                    </li>
                @endif

            </ul>

        </div>

    </div>
</nav>
