<?php
    // Load the accepted language
    include("includes/lang-loader.php");

    $selectedLang = parseAskedLang();

    include(getLangFile($selectedLang));
?>

<!DOCTYPE html>
<html lang=<?php echo $selectedLang ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144927724-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-144927724-1');
    </script>
    
    <title><?php echo $lang['sponsors-title']; ?></title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['sponsors-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/sponsors.php" /> 

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/sponsors.css" />
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1><?php echo $lang['sponsors-paragraph1Header']; ?></h1>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://nayasapana.jimdo.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/naya_sapana.jpg" class="vhmavi-sponsor-img" alt="Nay Sapana" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="http://www.ecoliersdumonde.org/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/ecoliers_du_monde.jpg" class="vhmavi-sponsor-img" alt="Écoliers du monde" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="http://www.mandaptravels.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/mandap_travels.jpg" class="vhmavi-sponsor-img" alt="Agence Mandap Travels" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="http://www.team-monde.org/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/team_monde.jpg" class="vhmavi-sponsor-img" alt="Tous les Enfants de l'Autre Monde" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://www.petitspas-solidaire.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/association_petits_pas.jpg" class="vhmavi-sponsor-img" alt="Association Petits Pas" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://www.altereco.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/alter_eco.png" class="vhmavi-sponsor-img" alt="Alter Eco" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://www.pomme-cannelle.org/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/association_pomme_cannelle.png" class="vhmavi-sponsor-img" alt="Association Pomme Cannelle" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://www.purprojet.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/pur_projet.png" class="vhmavi-sponsor-img" alt="Pur Projet" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://www.nepal-aide-hamroghar.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/hamro_ghar.jpg" class="vhmavi-sponsor-img" alt="Hamro Ghar" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="http://www.himalayan-sunrise.org/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/himalayan_sunrise.jpg" class="vhmavi-sponsor-img" alt="Himalayan Sunrise" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="http://childrenandfuture.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/children_and_future.png" class="vhmavi-sponsor-img" alt="Children & Future" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="https://www.facebook.com/Travel2Educate/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/travel_2_educate.jpg" class="vhmavi-sponsor-img" alt="Travel 2 Educate" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col">
                <a href="http://www.bolomoy.org/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/bolomoy.jpg" class="vhmavi-sponsor-img" alt="Association Bolomoy" />
                </a>
            </div>
            <div class="col-9 col-md-4 col-lg-3 vhmavi-sponsor-col" id="vhmavi-col-gse-foundation">
                <a href="http://www.gsefoundation.com/" target="_blank" rel="noopener noreferer">
                    <img src="img/sponsors/gse_foundation.png" class="vhmavi-sponsor-img" alt="GSE Foundation" />
                </a>
            </div>
            <div class="col-12 col-lg-9 vhmavi-other-sponsors-col">
                <p><?php echo $lang['sponsors-andAlso']; ?></p>
                <p>Association Ouvre Les Mains <em>(Salon-en-Provence)</em></p>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>
</body>
</html>
