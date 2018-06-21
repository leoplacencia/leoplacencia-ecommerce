
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Tienda Leo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav ml-auto">
        
        
        <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Categorias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Usuarios</a>
        </li>
        <li class="nav-item dropdown dropleft">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user">&nbsp;{{ Auth::user()->name }} <span class="caret"></span></i>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   
                <a class="dropdown-item" href="{{ route('home') }}">Ir al front <span class="sr-only">(current)</span></a>
                        
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>     
            </div>
        </li>
        </ul>
        
    </div>
</nav>