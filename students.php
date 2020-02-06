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
    
    <title><?php echo $lang['students-title']; ?></title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['students-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/students.php" /> 

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/students.css" />

    <!-- Text with image rows stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-txt-img-shared-row/vhmavi-txt-img-shared-row.css" />

    <!-- Full width image stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-full-width-img/vhmavi-full-width-img.css" />
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1><?php echo $lang['students-paragraph1Header']; ?></h1>
                <p><?php echo $lang['students-paragraph1Text1']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-text-img-shared-container">
        <div class="row row-cols-12 row-cols-lg-6 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-text-col vhmavi-text-col-left">
                <h2 class="vhmavi-students-h2"><?php echo $lang['students-paragraph2Header']; ?></h2>
                <p><?php echo $lang['students-paragraph2Text1']; ?></p>
            </div>
            <div class="col vhmavi-img-col vhmavi-img-col-right">
                <img src="img/students/student_smile.JPG" alt="<?php echo $lang['students-imgAlt1']; ?>" id="vhmavi-img-student-smile" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2 class="vhmavi-students-h2"><?php echo $lang['students-paragraph3Header']; ?></h2>
                <p><?php echo $lang['students-paragraph3Text1']; ?></p>
                <p><?php echo $lang['students-paragraph3Text2']; ?></p>
                <p><?php echo $lang['students-paragraph3Text3']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/students/student_group.JPG" alt="<?php echo $lang['students-imgAlt2']; ?>" id="vhmavi-img-student-group" />
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

    <!-- Load text with image rows script -->
    <script src="components/vhmavi-txt-img-shared-row/vhmavi-txt-img-shared-row.js"></script>
    
    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>
