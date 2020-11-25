<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="{{ url('/') }}">Quiero a mi mascota</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/informativo') }}"> Quienes somos? <span class="sr-only">(current)</span></a>
            </li>
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catalogo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/productos/prodperros') }}">Poductos para Caninos</a>
                    <a class="dropdown-item" href="{{ url('/productos/prodgatos') }}">Poductos para Felinos</a>

                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/servicios/domicilios') }}"> Contactos <span class="sr-only">(current)</span></a> 
            </li>
            
        </ul>
    </div>
</nav>