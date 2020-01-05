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

    <title><?php echo $lang['index-title']; ?></title>

    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['index-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/" /> 

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
