<header class="navbar boxed js-navbar">

    <!-- Brand -->
    <a class="brand" href="#">
        <img alt="" src="images/brand.png">
        <div class="brand-info">
            <div class="brand-name">bauhaus</div>
            <div class="brand-text">architecture</div>
        </div>
    </a>

    <!-- Phone -->
    <address class="navbar-address visible-md visible-xl">Llámanos: <span class="text-dark">{{ $configuracion->telefono }}</span></address>

    <!-- Button -->
    <button type="button" class="navbar-toggle hidden-lg" data-toggle="collapse" data-target="#navbar-collapse"
        aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Social -->
    <div class="social-list hidden-xs">
        @foreach ($redes_sociales as $item)
            <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
        @endforeach
    </div>

    <!-- Spacer -->
    <div class="navbar-spacer pull-right visible-lg"></div>

    <!-- Navigation -->
    <nav class="nav navigation visible-lg">
        <ul>
            <li>
                <a href="#main">Inicio</a>
            </li>
            <li>
                <a href="#about">Sobre Nosotros</a>
            </li>
            <li>
                <a href="#projects">Proyectos</a>
            </li>
            <li>
                <a href="#contacts">Contactanos</a>
            </li>
        </ul>
    </nav>

</header>
