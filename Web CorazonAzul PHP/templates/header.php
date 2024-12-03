<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="CorazonAzul" class="img-fluid" id="site-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == 'quienes-somos') echo 'active'; ?>" href="/quienes-somos">Quiénes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == 'que-hacemos') echo 'active'; ?>" href="/que-hacemos">Qué hacemos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == 'nuestro-equipo') echo 'active'; ?>" href="/nuestro-equipo">Nuestro Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($current_page == 'como-colaborar') echo 'active'; ?>" href="/como-colaborar">Cómo Colaborar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>