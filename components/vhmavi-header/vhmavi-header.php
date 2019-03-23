<!--
    vhmavi-header.php
    The header contains the logo and school name and menu for accessing to the different pages
    Is used by all the pages
-->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <!-- The logo and brand name -->
    <a class="navbar-brand" href="index.php">
        <img src="img/logo.svg" width="64" height="64" alt="logo">
        Victor Hugo Manjushree Vidyapith
    </a>

    <!-- For narrow screens : navbar is changed to a button and an acordion menu -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- The different menus - uses collapse so its aspect change on narrow screens (acordion menu) -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <!--
                Allows to activate the link in menu only if it is the active page
                So if we are on /index.php or / links, the corresponding menu "Accueil" will be
                active (yellow)
            -->
            <?php
            if ($_SERVER['REQUEST_URI'] == '/index.php'
                || $_SERVER['REQUEST_URI'] == '/'):
            ?>
            <li class="nav-item active vhmavi-active">
            <?php else: ?>
            <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <?php
            if ($_SERVER['REQUEST_URI'] == '/presentation.php'
                || $_SERVER['REQUEST_URI'] == '/mission.php'
                || $_SERVER['REQUEST_URI'] == '/students.php'
                || $_SERVER['REQUEST_URI'] == '/hostel.php'
                || $_SERVER['REQUEST_URI'] == '/news.php'):
            ?>
            <li class="nav-item dropdown active vhmavi-active vhmavi-show">
            <?php else: ?>
            <li class="nav-item dropdown vhmavi-show">
            <?php endif ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    L'école
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="presentation.php">Présentation</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="mission.php">Notre mission</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="students.php">Nos élèves</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="hostel.php">L'internat</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="news.php">Les dernières nouvelles</a>
                </div>
            </li>
            <?php
            if ($_SERVER['REQUEST_URI'] == '/team.php'
                || $_SERVER['REQUEST_URI'] == '/sponsors.php'):
            ?>
            <li class="nav-item dropdown active vhmavi-active vhmavi-show">
            <?php else: ?>
            <li class="nav-item dropdown vhmavi-show">
            <?php endif ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Qui sommes-nous ?
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="team.php">Notre équipe</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="sponsors.php">Nos partenaires</a>
                </div>
            </li>
            <?php
            if ($_SERVER['REQUEST_URI'] == '/donation-sponsor.php'
                // || $_SERVER['REQUEST_URI'] == '/become-sponsor.php' // TODO : Uncomment when become-sponsor.php is ready
                || $_SERVER['REQUEST_URI'] == '/volunteer.php'):
            ?>
            <li class="nav-item dropdown active vhmavi-active vhmavi-show">
            <?php else: ?>
            <li class="nav-item dropdown vhmavi-show">
            <?php endif ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nous soutenir
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="donation-sponsor.php">Don et parrainage</a>
                    <div class="dropdown-divider"></div>
                    <!-- TODO : Uncomment when become-sponsor.php is ready -->
                    <!-- <a class="dropdown-item" href="become-sponsor.php">Devenir partenaire</a>
                    <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="volunteer.php">Devenir bénévole</a>
                </div>
            </li>
            <?php if ($_SERVER['REQUEST_URI'] == '/contact.php'): ?>
            <li class="nav-item active vhmavi-active">
            <?php else: ?>
            <li class="nav-item">
            <?php endif ?>
                <a class="nav-link" href="contact.php">Nous contacter</a>
            </li>
        </ul>
    </div>
</nav>