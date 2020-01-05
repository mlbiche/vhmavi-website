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
    
    <title><?php echo $lang['mission-title']; ?></title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['mission-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/mission.php" /> 

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/mission.css" />

    <!-- Full width image stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-full-width-img/vhmavi-full-width-img.css" />
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1><?php echo $lang['mission-paragraph1Header']; ?></h1>
                <p><?php echo $lang['mission-paragraph1Text1']; ?></p>
                <p><?php echo $lang['mission-paragraph1Text2']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/mission/student_dance.jpg" alt="<?php echo $lang['mission-imgAlt1']; ?>" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['mission-paragraph2Header']; ?></h2>
                <p><?php echo $lang['mission-paragraph2Text1']; ?></p>
                <p><?php echo $lang['mission-paragraph2Text2']; ?></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4 vhmavi-icons-text-col">
                <div class="vhmavi-icon-container">
                    <i class="vhmavi-icon-paint-palette"></i>
                </div>
                <p><?php echo $lang['mission-paragraph2Text3']; ?></p>
            </div>
            <div class="col-12 col-md-6 col-lg-4 vhmavi-icons-text-col">   
                <div  class="vhmavi-icon-container">
                    <i class="vhmavi-icon-speech-bubble"></i>
                </div>                     
                <p><?php echo $lang['mission-paragraph2Text4']; ?></p>
            </div>
            <div class="col-12 vhmavi-icons-text-col vhmavi-icons-text-col-last">
                <div class="vhmavi-icon-container">
                    <i class="vhmavi-icon-knowledge"></i>
                </div>
                <p><?php echo $lang['mission-paragraph2Text5']; ?></p>
            </div>
            <div class="col-12 col-lg-9">
                <p><?php echo $lang['mission-paragraph2Text6']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/mission/student_reuse.jpg" alt="<?php echo $lang['mission-imgAlt2']; ?>" id="vhmavi-img-student-reuse" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['mission-paragraph3Header']; ?></h2>
                <p><?php echo $lang['mission-paragraph3Text1']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/mission/student_group.JPG" alt="<?php echo $lang['mission-imgAlt3']; ?>" id="vhmavi-img-student-group" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['mission-paragraph4Header']; ?></h2>
                <p><?php echo $lang['mission-paragraph4Text1']; ?></p>
                <p><?php echo $lang['mission-paragraph4Text2']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/mission/preschool_student.JPG" alt="<?php echo $lang['mission-imgAlt4']; ?>" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['mission-paragraph5Header']; ?></h2>
                <p><?php echo $lang['mission-paragraph5Text1']; ?></p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/mission/teacher.JPG" alt="<?php echo $lang['mission-imgAlt5']; ?>" id="vhmavi-img-teacher" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2><?php echo $lang['mission-paragraph6Header']; ?></h2>
                <p><?php echo $lang['mission-paragraph6Text1']; ?></p>
                <p><?php echo $lang['mission-paragraph6Text2']; ?></p>
                <p><?php echo $lang['mission-paragraph6Text3']; ?></p>
            </div>
        </div>
    </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>
    
    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>
