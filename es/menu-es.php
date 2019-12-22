<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!--Branding - Logo-->
    <a href="index.php" class="navbar-brand"><img src="src/img/temmalogo.png" style="max-width: 150px;" alt="Temma Freight Logo"></a>
    
    <!--Button to collapse menu when in mobile view-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!--Collapsable stuff-->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php#services" class="nav-link btn btn-dark m-1">Servicios</a>
            </li>
            <li class="nav-item">
                <a href="index.php#locations" class="nav-link btn btn-dark m-1">Locaciones</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link btn btn-dark m-1">Contactanos</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link btn btn-dark m-1">Nosotros</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link btn btn-dark m-1" data-toggle="modal" href="#" data-target="#ModalLang">
                    <img src="<?php if ($_COOKIE['lang'] == 'EN') { echo 'src/img/en.png'; } if ($_COOKIE['lang'] == 'ES') { echo 'src/img/es.png'; }?>"class>
                    Idioma
                </a>
            </li>
        </ul>
    </div>
</nav>