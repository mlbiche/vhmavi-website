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
    
    <title><?php echo $lang['hostel-title']; ?></title>

    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['hostel-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/hostel.php" /> 

    <!-- Common head include -->
    <?php include('includes/head.php'); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/hostel.css" />

    <!-- Full width image stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-full-width-img/vhmavi-full-width-img.css" />
</head>
<body>
    <!-- Header include -->
    <?php include('components/vhmavi-header/vhmavi-header.php'); ?>

    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/hostel/hostel_students.jpg" alt="<?php echo $lang['hostel-imgAlt1']; ?>" id="vhmavi-img-hostel-students" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1><?php echo $lang['hostel-paragraph1Header']; ?></h1>
                <p><?php echo $lang['hostel-paragraph1Text1']; ?></p>
                <p><?php echo $lang['hostel-paragraph1Text2']; ?></p>
                <p><?php echo $lang['hostel-paragraph1Text3']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/hostel/hostel.JPG" alt="<?php echo $lang['hostel-imgAlt2']; ?>" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['hostel-paragraph2Header']; ?></h2>
                <p><?php echo $lang['hostel-paragraph2Text1']; ?></p>
                <p><?php echo $lang['hostel-paragraph2Text2']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/hostel/new_hostel.JPG" alt="<?php echo $lang['hostel-imgAlt3']; ?>" id="vhmavi-img-new-hostel" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['hostel-paragraph3Header']; ?></h2>
                <p><?php echo $lang['hostel-paragraph3Text1']; ?></p>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include('components/vhmavi-footer/vhmavi-footer.php'); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include('includes/script-loader.php'); ?>
</body>
</html>
