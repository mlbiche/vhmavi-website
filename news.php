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
    
    <title>Les dernières nouvelles - Victor Hugo Manjushree Vidyapith - VHMaVi</title>

    <!-- Meta description for SEO -->
    <meta name="description" content="Victor Hugo Manjushree Vidyapith, aussi appelée VHMaVi, est une école népalaise qui fournit une éducation gratuite de qualité." />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/news.php" /> 

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>
        
    <!-- Accordion stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-accordion/vhmavi-accordion.css" />
    
    <!-- Form stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-form/vhmavi-form.css" />

    <!--
        reCAPTCHA V2 script loading for form protection
        It has to be placed in the head tag as it is loaded asynchronously and defered (async defer)
    -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <!-- Newsletters -->
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1>Les newsletters de l'école</h1>
                <p>Pour recevoir tous les quatre mois des nouvelles des élèves de l'école, leurs projets pédagogiques, et les évolution de VHMaVi, abonnez-vous à notre newsletter !</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <!-- Newsletter subscription form include -->
                <?php include("components/news/news-newsletter-form/news-newsletter-form.php"); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <!-- Newsletter accordion list include -->
                <?php include("components/news/news-newsletter-list/news-newsletter-list.php"); ?>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>
    
    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

    <!--
        Newsletter subscription form script loading
        We use type module because the script acts as a module
        It loads other JS files using import
    -->
    <script src="components/news/news-newsletter-form/news-newsletter-form.js" type="module"></script>

    <!-- Accordion script loading -->
    <script src="components/vhmavi-accordion/vhmavi-accordion.js"></script>
</body>
</html>
