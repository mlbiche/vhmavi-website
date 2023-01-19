<?php
    // Load the accepted language
    include('includes/lang-loader.php');

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

    <title><?php echo $lang['donationSponsor-title']; ?></title>

    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['donationSponsor-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/donation-sponsor.php" />

    <!-- Common head include -->
    <?php include('includes/head.php'); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/donation-sponsor.css" />

    <!-- Donation sponsor form stylesheet -->
    <link rel="stylesheet" href="components/donation-sponsor/donation-sponsor-form/donation-sponsor-form.css" />

    <!-- Donation sponsor option stylesheet -->
    <link rel="stylesheet" href="components/donation-sponsor/donation-sponsor-option/donation-sponsor-option.css" />

    <!-- Full width image stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-full-width-img/vhmavi-full-width-img.css" />

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
    <?php include('components/vhmavi-header/vhmavi-header.php'); ?>

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1><?php echo $lang['donationSponsor-paragraph1Header']; ?></h1>
                <p><?php echo $lang['donationSponsor-paragraph1Text1']; ?></p>
            </div>
            <div class="col-12 col-lg-7">
                <h5 class="vhmavi-join-sponsor"><?php echo $lang['donationSponsor-joinSponsorText1']; ?></h5>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 vhmavi-video-col">
                <!-- Teaser children sponsoring -->
                <iframe src="https://www.youtube.com/embed/_4F8UqxZ8U0" title="Vidéo parrainage"></iframe>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2 class="vhmavi-donation-sponsor-small-h2"><?php echo $lang['donationSponsor-paragraph2Header']; ?></h2>
                <p><?php echo $lang['donationSponsor-paragraph2Text1']; ?></p>

                <h2 class="vhmavi-donation-sponsor-small-h2"><?php echo $lang['donationSponsor-paragraph3Header']; ?></h2>
                <p><?php echo $lang['donationSponsor-paragraph3Text1']; ?></p>

                <h2 class="vhmavi-donation-sponsor-small-h2"><?php echo $lang['donationSponsor-paragraph4Header']; ?></h2>
                <p><?php echo $lang['donationSponsor-paragraph4Text1']; ?></p>

                <h5 class="vhmavi-join-sponsor"><?php echo $lang['donationSponsor-joinSponsorText2']; ?></h5>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/donation-sponsor/student_smile.jpg" alt="<?php echo $lang['donationSponsor-imgAlt1']; ?>" id="vhmavi-img-student-smile" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['donationSponsor-paragraph5Header']; ?></h2>
                <p><?php echo $lang['donationSponsor-paragraph5Text1']; ?></p>
                <p><?php echo $lang['donationSponsor-paragraph5Text2']; ?></p>
            </div>
            <div class="col-12 col-lg-7">
                <h5 class="vhmavi-join-sponsor"><?php echo $lang['donationSponsor-joinSponsorText3']; ?></h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <!-- Donation sponsor form include -->
                <?php include('components/donation-sponsor/donation-sponsor-form/donation-sponsor-form.php'); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['donationSponsor-paragraph6Header']; ?></h2>
                <p><?php echo $lang['donationSponsor-paragraph6Text1']; ?></p>
                <p><?php echo $lang['donationSponsor-paragraph6Text2']; ?></p>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include('components/vhmavi-footer/vhmavi-footer.php'); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include('includes/script-loader.php'); ?>

    <!--
        Donation sponsor form script loading
        We use type module because the script acts as a module
        It loads other JS files using import
    -->
    <script src="components/donation-sponsor/donation-sponsor-form/donation-sponsor-form.js" type="module"></script>

    <!-- Donation sponsor option script loading -->
    <script src="components/donation-sponsor/donation-sponsor-option/donation-sponsor-option.js"></script>

    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>
