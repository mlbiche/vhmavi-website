<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Parrainer un enfant - Victor Hugo Manjushree Vidyapith</title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="Parrainez un enfant de Victor Hugo Manjushree Vidyapith, une école népalaise pour une éducation de qualité et gratuite." />

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

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
</head>
<body>
    <!-- Header include -->
    <?php include("components/vhmavi-header/vhmavi-header.php"); ?>

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1>Le parrainage</h1>
                <p>Parrainer un élève de VHMaVi c'est non seulement financer ses études, mais c'est aussi lui apporter une motivation pour sa réussite scolaire et un sentiment d'accompagnement sur le long terme. C'est un soutien inestimable pour nos élèves !</p>
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
                <h2 class="vhmavi-donation-sponsor-small-h2">Comment trouver son/sa filleul/le ?</h2>
                <p>Sur demande, vous pouvez recevoir les histoires, profils et bulletins scolaires des enfants en recherche de parrainage, et décider de parrainer un profil. En moyenne, une quarantaine d'élèves sont en recherche de parrainages.</p>
                
                <h2 class="vhmavi-donation-sponsor-small-h2">En quoi consiste le suivi de l'enfant ?</h2>
                <p>Le parrainage finance tout ou partie de la scolarité et internat d'un élève, mais ce n'est pas tout ! Nos élèves apprécient énormément correspondre avec leurs parrains, recevoir des colis, voire rencontrer leurs parrains à l'occasion de voyages. Tous nos parrains peuvent aussi recevoir notre newsletter.</p>

                <h2 class="vhmavi-donation-sponsor-small-h2">Comment sont utilisés les fonds du parrainage ?</h2>
                <p>L'intégralité des fonds des parrainages est mutualisée pour financer le fonctionnement de l'école (la cantine de l’école et l’internat, fournir des manuels, des uniformes, du matériel scolaire, etc...).</p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/donation-sponsor/student_smile.JPG" alt="Portrait d'enfants" id="vhmavi-img-student-smile" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2>L'association ASVHMAVI Nepal</h2>
                <p>Les dons et parrainages (dons mensuels) s'effectuent auprès d'une association française, ASVHMAVI Nepal, basée à Lyon. Ainsi, après déduction d'impôts, votre don ne vous coûte réellement que 34% de son montant.</p>
                <p>Afin de permettre le bon fonctionnement de l'association, tout parrainage s'accompagne d'une adhésion d'un montant de 10€ par an.</p>
                <p>Les parrainages sont sans engagement et peuvent être résiliés à tout moment sur demande.</p>
            </div>
            <div class="col-12 col-lg-7">
                <h5 class="vhmavi-join-sponsor">Déjà <span class="vhmavi-figure-nb-sponsors"></span> parrains et marraines permettent à des enfants népalais de bénéficier d'une éducation exceptionnelle, et vous ?</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <!-- Donation sponsor form include -->
                <?php include("components/donation-sponsor/donation-sponsor-form/donation-sponsor-form.php"); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2>Le don matériel</h2>
                <p>Le don matériel n'est pas le soutien que nous privilégions, pour des raisons de déperdition des colis et d'empreinte carbone du transport. Par ailleurs, le don financier nous permet de soutenir l'économie népalaise en nous fournissant localement.</p>
                <p>Si toutefois vous souhaitez nous faire un don matériel, merci de nous contacter via <a href="contact.php">notre formulaire de contact</a> avant l'envoi pour prendre connaissance de nos besoins matériels du moment (vêtements, matériel éducatif, etc...).</p>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

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
