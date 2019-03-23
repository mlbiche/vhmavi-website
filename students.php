<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nos élèves - Victor Hugo Manjushree Vidyapith</title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="Victor Hugo Manjushree Vidyapith, une école népalaise pour une éducation de qualité et gratuite." />

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
                <h1>Nos élèves</h1>
                <p>Aujourd'hui, <span class="vhmavi-figure-nb-students"></span> élèves étudient de la nursery à la classe 10 à Victor Hugo Manjushree Vidyapith. De 18 mois à 18 ans, chacun a son histoire et leurs horizons sont parfois bien différents.</p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-text-img-shared-container">
        <div class="row vhmavi-txt-img-shared-row">
            <div class="col-12 col-lg-6 vhmavi-text-col vhmavi-text-col-left">
                <h2 class="vhmavi-students-h2">Des enfants issus de familles dévaforisées</h2>
                <p>À VHMaVi, pas question de laisser de côtés les plus démunis. Parmi nos élèves, nombreux sont ceux issus de familles parfois très pauvres et ce sont plus de <span class="vhmavi-figure-fees-exempted-percentage"></span>% d'entre eux qui se voient exemptés de frais. L'accès à tous à l'éducation est pour nous une cause primordiale, afin de donner aux enfants toutes les cartes possibles pour dessiner leur destin.</p>
            </div>
            <div class="col-12 col-lg-6 vhmavi-img-col vhmavi-img-col-right">
                <img src="img/students/student_smile.JPG" alt="Portrait d'enfant" id="vhmavi-img-student-smile" />
            </div>
        </div>
    </div>
    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h2 class="vhmavi-students-h2">De Chapali... au Far West népalais !</h2>
                <p>Initialement destinée aux enfants du village de Chapali, l'école accueille maintenant des enfants de différentes régions du Népal.</p>
                <p>Une grande majorité des élèves habitent à moins de 1,5km de l'école. Pas de ramassage scolaire à VHMaVi, tout le monde vient à pied. Cela permet ainsi d'offrir une éducation de proximité aux familles du village. Bien que ces élèves habitent le quartier, ils restent originaires des quatre coins du Népal, leurs familles ayant migrées vers Katmandou attirées par l'emploi et les meilleures conditions de vies.</p>
                <p>Notre internat permet aussi d'accueillir des enfants venant de plus loin qui nous sont recommandés. Venant du district de Nuwakot, ou encore des régions du Solu Khumbu, du Teraï et même du Far West népalais, ceux-ci sont logés à quelques pas l'école.</p>
            </div>
        </div>
    </div>
    <div class="container vhmavi-container vhmavi-full-width-img-container">
        <div class="row">
            <div class="col vhmavi-img-col">
                <img src="img/students/student_group.JPG" alt="Groupe d'élèves" id="vhmavi-img-student-group" />
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
