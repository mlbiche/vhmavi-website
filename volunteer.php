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
    
    <title><?php echo $lang['volunteer-title']; ?></title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['volunteer-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/volunteer.php" /> 

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/volunteer.css" />

    <!-- Text with image rows stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-txt-img-shared-row/vhmavi-txt-img-shared-row.css" />

    <!-- Form stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-form/vhmavi-form.css" />

    <!-- File input stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-file-input/vhmavi-file-input.css" />

    <!--
        reCAPTCHA V2 script loading for form protection
        It has to be placed in the head tag as it is loaded asynchronously and defered (async defer)
    -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1><?php echo $lang['volunteer-paragraph1Header']; ?></h1>
                <p><?php echo $lang['volunteer-paragraph1Text1']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-text-img-shared-container">
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-text-col vhmavi-text-col-left">
                <h2><?php echo $lang['volunteer-paragraph2Header']; ?></h2>
                <p><?php echo $lang['volunteer-paragraph2Text1']; ?></p>
                <p><?php echo $lang['volunteer-paragraph2Text2']; ?></p>
            </div>
            <div class="col vhmavi-img-col vhmavi-img-col-right">
                <img src="img/volunteer/volunteer_team.jpg" alt="<?php echo $lang['volunteer-imgAlt1']; ?>" id="vhmavi-img-volunteer-team" />
            </div>
        </div>
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-img-col vhmavi-img-col-left order-12 order-lg-1">
                <img src="img/volunteer/volunteer_friend.jpg" alt="<?php echo $lang['volunteer-imgAlt2']; ?>" id="vhmavi-img-volunteer-friend" />
            </div>
            <div class="col vhmavi-text-col vhmavi-text-col-right order-1 order-lg-12">
                <h2><?php echo $lang['volunteer-paragraph3Header']; ?></h2>
                <p><?php echo $lang['volunteer-paragraph3Text1']; ?></p>
                <h3><?php echo $lang['volunteer-paragraph3SubHeader']; ?></h3>
                <p><?php echo $lang['volunteer-paragraph3Text2']; ?></p>
                <p><?php echo $lang['volunteer-paragraph3Text3']; ?></p>
                <p><?php echo $lang['volunteer-paragraph3Text4']; ?></p>
                <p><?php echo $lang['volunteer-paragraph3Text5']; ?></p>
                <p><?php echo $lang['volunteer-paragraph3Text6']; ?></p>
                <p><em><?php echo $lang['volunteer-paragraph3Text7']; ?></em></p>
            </div>
        </div>
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-text-col vhmavi-text-col-left">
                <h2><?php echo $lang['volunteer-paragraph4Header']; ?></h2>
                <p><?php echo $lang['volunteer-paragraph4Text1']; ?></p>
                <div class="vhmavi-icon-text-row">
                    <i class="vhmavi-icon-class"></i>
                    <p><?php echo $lang['volunteer-paragraph4Text2']; ?></p>
                </div>                
                <div class="vhmavi-icon-text-row">
                    <i class="vhmavi-icon-homework"></i>
                    <p><?php echo $lang['volunteer-paragraph4Text3']; ?></p>
                </div>
            </div>
            <div class="col vhmavi-img-col vhmavi-img-col-right">
                <img src="img/volunteer/volunteer_smile.jpg" alt="<?php echo $lang['volunteer-imgAlt3']; ?>" />
            </div>
        </div>
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-img-col vhmavi-img-col-left order-12 order-lg-1">
                <img src="img/volunteer/volunteer_explain2.jpg" alt="<?php echo $lang['volunteer-imgAlt4']; ?>" />
            </div>
            <div class="col vhmavi-text-col vhmavi-text-col-right order-1 order-lg-12">
                <h2><?php echo $lang['volunteer-paragraph5Header']; ?></h2>
                <p><?php echo $lang['volunteer-paragraph5Text1']; ?></p>
                <p><?php echo $lang['volunteer-paragraph5Text2']; ?></p>
                <p><?php echo $lang['volunteer-paragraph5Text3']; ?></p>
            </div>
        </div>
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-text-col vhmavi-text-col-left">
                <h2><?php echo $lang['volunteer-paragraph6Header']; ?></h2>
                <p><?php echo $lang['volunteer-paragraph6Text1']; ?></p>
                <p><?php echo $lang['volunteer-paragraph6Text2']; ?></p>
            </div>
            <div class="col vhmavi-img-col vhmavi-img-col-right">
                <img src="img/volunteer/volunteers_students.jpg" alt="<?php echo $lang['volunteer-imgAlt5']; ?>" id="vhmavi-img-volunteers-students" />
            </div>
        </div>
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-img-col vhmavi-img-col-left order-12 order-lg-1">
                <img src="img/volunteer/volunteer_explain.jpg" alt="<?php echo $lang['volunteer-imgAlt6']; ?>" />
            </div>
            <div class="col vhmavi-text-col vhmavi-text-col-right order-1 order-lg-12">
                <p class="vhmavi-volunteer-quote"><?php echo $lang['volunteer-quotationParagraph1']; ?></p>
                <p class="vhmavi-volunteer-quote"><?php echo $lang['volunteer-quotationParagraph2']; ?></p>
                <p class="vhmavi-volunteer-quote-author"><?php echo $lang['volunteer-quotationAuthor']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['volunteer-paragraph7Header']; ?></h2>
                <p><?php echo $lang['volunteer-paragraph7Text1']; ?></p>
                <p><?php echo $lang['volunteer-paragraph7Text2']; ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <!-- Volunteer application form -->
                <?php include("components/volunteer/volunteer-form/volunteer-form.php"); ?>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

    <!--
        Volunteer form script loading
        We use type module because the script acts as a module
        It loads other JS files using import
    -->
    <script src="components/volunteer/volunteer-form/volunteer-form.js" type="module"></script>

    <!-- Load text with image rows script -->
    <script src="components/vhmavi-txt-img-shared-row/vhmavi-txt-img-shared-row.js"></script>
</body>
</html>
