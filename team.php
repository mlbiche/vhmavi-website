<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144927724-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-144927724-1');
    </script>
    
    <title>Notre équipe - Victor Hugo Manjushree Vidyapith - VHMaVi</title>

    <!-- Meta description for SEO -->
    <meta name="description" content="Victor Hugo Manjushree Vidyapith, aussi appelée VHMaVi, est une école népalaise qui fournit une éducation gratuite de qualité." />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/team.php" /> 

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>
    
    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/team.css" />
    
    <!-- Direction stylesheet -->
    <link rel="stylesheet" href="components/team/team-direction/team-direction.css" />
    
    <!-- Team list stylesheet -->
    <link rel="stylesheet" href="components/team/team-list/team-list.css" />
    
    <!-- Accordion stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-accordion/vhmavi-accordion.css" />

    <!-- Full width image stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-full-width-img/vhmavi-full-width-img.css" />
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <!-- Direction include -->
        <?php include("components/team/team-direction/team-direction.php"); ?>

        <!-- Team list include -->
        <?php include("components/team/team-list/team-list.php"); ?>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/team/team.jpg" alt="Des enseignants" id="vhmavi-img-team" />
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>
    
    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

    <!-- Accordion script loading -->
    <script src="components/vhmavi-accordion/vhmavi-accordion.js"></script>

    <!-- Team direction script loading-->
    <script src="components/team/team-direction/team-direction.js"></script>
    
    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>
