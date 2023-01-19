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

    <title><?php echo $lang['presentation-title']; ?></title>

    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['presentation-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/presentation.php" />

    <!-- Common head include -->
    <?php include('includes/head.php'); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/presentation.css" />

    <!-- Text with image rows stylesheet -->
    <link rel="stylesheet" href="components/vhmavi-txt-img-shared-row/vhmavi-txt-img-shared-row.css" />
</head>
<body>
    <!-- Header include -->
    <?php include('components/vhmavi-header/vhmavi-header.php'); ?>

    <!-- Contexte -->
    <div class="container vhmavi-container vhmavi-text-img-shared-container">
        <div class="row row-cols-1 row-cols-lg-2 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-text-col vhmavi-text-col-left">
                <h1 class="vhmavi-presentation-h1"><?php echo $lang['presentation-paragraph1Header']; ?></h1>
                <p><?php echo $lang['presentation-paragraph1Text1']; ?></p>
                <p><?php echo $lang['presentation-paragraph1Text2']; ?></p>
                <p><?php echo $lang['presentation-paragraph1Text3']; ?></p>
            </div>
            <div class="col vhmavi-img-col vhmavi-img-col-right">
                <img src="img/presentation/nepal_field.jpg" alt="<?php echo $lang['presentation-imgAlt1']; ?>" id="vhmavi-img-nepal-field" />
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-img-col vhmavi-img-col-left order-12 order-lg-1">
                <img src="img/presentation/little_student.jpg" alt="<?php echo $lang['presentation-imgAlt2']; ?>" id="vhmavi-img-little-student" />
            </div>
            <div class="col vhmavi-text-col vhmavi-text-col-right order-1 order-lg-12">
                <h2 class="vhmavi-presentation-h2"><?php echo $lang['presentation-paragraph2Header']; ?></h2>
                <p><?php echo $lang['presentation-paragraph2Text1']; ?></p>
                <p><?php echo $lang['presentation-paragraph2Text2']; ?></p>
                <p><?php echo $lang['presentation-paragraph2Text3']; ?></p>
                <p><?php echo $lang['presentation-paragraph2Text4']; ?></p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-text-col vhmavi-text-col-left">
                <h2 class="vhmavi-presentation-h2"><em><?php echo $lang['presentation-paragraph3Header']; ?></em></h2>
                <p><?php echo $lang['presentation-paragraph3Text1']; ?></p>
                <p><?php echo $lang['presentation-paragraph3Text2']; ?></p>
                <p><span class="vhmavi-school-name">Victor Hugo</span><?php echo $lang['presentation-paragraph3Text3']; ?></p>
                <p><span class="vhmavi-school-name">Manjushree</span><?php echo $lang['presentation-paragraph3Text4']; ?></p>
                <p><span class="vhmavi-school-name">Vidyapith</span><?php echo $lang['presentation-paragraph3Text5']; ?></p>
                <p><?php echo $lang['presentation-paragraph3Text6']; ?></p>
            </div>
            <div class="col vhmavi-img-col vhmavi-img-col-right">
                <img src="img/presentation/old_school.jpg" alt="<?php echo $lang['presentation-imgAlt3']; ?>" />
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 vhmavi-txt-img-shared-row">
            <div class="col vhmavi-img-col vhmavi-img-col-left order-12 order-lg-1">
                <img src="img/presentation/preschool_building.jpg" alt="<?php echo $lang['presentation-imgAlt4']; ?>" id="vhmavi-img-preschool-building" />
            </div>
            <div class="col vhmavi-text-col vhmavi-text-col-right order-1 order-lg-12">
                <h2 class="vhmavi-presentation-h2"><?php echo $lang['presentation-paragraph4Header']; ?></h2>
                <p><?php echo $lang['presentation-paragraph4Text1']; ?></p>
                <p><?php echo $lang['presentation-paragraph4Text2']; ?></p>
                <p><?php echo $lang['presentation-paragraph4Text3']; ?></p>
                <p><?php echo $lang['presentation-paragraph4Text4']; ?></p>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include('components/vhmavi-footer/vhmavi-footer.php'); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include('includes/script-loader.php'); ?>

    <!-- Text with image rows script loading -->
    <script src="components/vhmavi-txt-img-shared-row/vhmavi-txt-img-shared-row.js"></script>

    <!-- School data script loading -->
    <script src="js/school-figures.js"></script>
</body>
</html>
