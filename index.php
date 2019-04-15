<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil - Victor Hugo Manjushree Vidyapith</title>

    <!-- Meta description for SEO -->
    <meta name="description" content="Victor Hugo Manjushree Vidyapith, une école népalaise pour une éducation de qualité et gratuite." />

    <!-- Meta for Google referencement -->
    <meta name="google-site-verification" content="yfTYcoMeZh4XWN5MlDn8Ra-vLr1SIGTL1VyDDofS2aY" />

    <!-- Meta for Google GSuite -->
    <meta name="google-site-verification" content="0qypsbEQnhjE9ezI9_IJQYJCLW13MFsBc3BgshgQPcw" />

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

    <!-- Carousel stylesheet -->
    <link rel="stylesheet" href="components/index/index-carousel/index-carousel.css" />

    <!-- Home description stylesheet -->
    <link rel="stylesheet" href="components/index/index-description/index-description.css" />

    <!-- Home figures stylesheet -->
    <link rel="stylesheet" href="components/index/index-figures/index-figures.css" />
</head>
<body>
    <!-- Header include - navbar -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <!-- Carousel -->
    <?php include("components/index/index-carousel/index-carousel.php"); ?>

    <!-- Description and logo container -->
    <?php include("components/index/index-description/index-description.php"); ?>

    <!-- Figures container -->
    <?php include("components/index/index-figures/index-figures.php"); ?>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!--
        Bootstrap and JQuery script loader include
        They are loaded first because JQuery is used by other JS scripts
    -->
    <?php include("includes/script-loader.php"); ?>

    <!-- Carousel script loading -->
    <script src="components/index/index-carousel/index-carousel.js"></script>

    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>
