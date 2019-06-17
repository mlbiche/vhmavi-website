<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nous contacter - Victor Hugo Manjushree Vidyapith</title>

    <!-- Meta description for SEO -->
    <meta name="description" content="Victor Hugo Manjushree Vidyapith, une école népalaise pour une éducation de qualité et gratuite." />

    <!-- Common head include -->
    <?php include("includes/head.php"); ?>

    <!-- Specific stylesheet -->
    <link rel="stylesheet" href="css/contact.css" />

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

    <div class="container vhmavi-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <h1>Contactez-nous !</h1>
                <p>Vous avez une question sur l'école ? Vous voulez prendre de nos nouvelles ? Vous souhaitez nous rendre visite ?</p>
                <p>Quelque soit le motif, contactez-nous, nous nous ferons un plaisir de vous répondre !</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <!--
                    Contact form
                    It has novalidate property so we can customize invalid field format
                -->
                <form class="vhmavi-form" novalidate>
                    <!-- Display an alert for email sent success -->
                    <div class="alert alert-success vhmavi-form-alert-success" role="alert">
                        Votre mail a été envoyé ! Nous vous répondrons dans les plus brefs délais.
                    </div>
                    <!-- Display an alert for email sent failure -->
                    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
                        L'envoi de votre mail a échoué... Veuillez réessayer plus tard.
                    </div>

                    <!-- Form group for first name -->
                    <div class="form-group">
                        <!--
                            The text written above the text box is the label
                            It needs to refer to the input thanks to the for field corresponding to the input id
                        -->
                        <label for="contact-form-first-name">Prénom <span class="vhmavi-required-field">*</span></label>
                        <!--
                            This field is required
                            The placeholder is the displayed text within the empty input
                            The name is used to identify parameters in the POST HTTP request when the form is submitted
                            This is this name that is used to access each submitted value
                        -->
                        <input type="text" class="form-control" name="firstName" id="contact-form-first-name" placeholder="Prénom" required>
                        <!-- The invalid feedback text is displayed when the form is submitted and is not validated -->
                        <div class="invalid-feedback">
                            Laissez-nous vous connaître un peu en donnant votre prénom.
                        </div>
                    </div>
                    <!-- Form group for last name -->
                    <div class="form-group">
                        <label for="contact-form-last-name">Nom <span class="vhmavi-required-field">*</span></label>
                        <input type="text" class="form-control" name="lastName" id="contact-form-last-name" placeholder="Nom" required>
                        <div class="invalid-feedback">
                            Laissez-nous vous connaître un peu en donnant votre nom.
                        </div>
                    </div>
                    <!-- Form group for email address -->
                    <div class="form-group">
                        <label for="contact-form-email">Adresse mail <span class="vhmavi-required-field">*</span></label>
                        <input type="email" class="form-control" name="email" id="contact-form-email" placeholder="Adresse mail" required>
                        <div class="invalid-feedback">
                            Merci d'entrer une adresse valide.
                        </div>
                    </div>
                    <!-- Form group for subject suggestion -->
                    <div class="form-group">
                        <label for="contact-form-suggested-subject">Objet suggéré <span class="vhmavi-required-field">*</span></label>
                        <select class="form-control" name="subject-suggested" id="contact-form-suggested-subject" required>
                            <option value="children-to-sponsor-subject">Je souhaite connaître les enfants en attente de parrainage</option>
                            <option value="form-issue-subject">Je rencontre un problème avec un formulaire du site</option>
                            <option value="sponsor-package-subject">Je souhaite envoyer un colis à un mon/ma filleul/le</option>
                            <option value="sponsor-cancellation-subject">Je souhaite résilier mon parrainage</option>
                            <option value="sponsor-change-subject">Je souhaite changer de formule de parrainage</option>
                            <option value="gear-donation-subject">Je souhaite faire un don matériel à l'école</option>
                            <option value="volunteer-subject">J'ai une question concernant le bénévolat</option>
                            <option value="other-subject">Autre</option>
                        </select>
                    </div>
                    <!-- Form group for subject -->
                    <div class="form-group" id="contact-form-group-subject">
                        <label for="contact-form-subject">Objet <span class="vhmavi-required-field">*</span></label>
                        <input class="form-control" name="subject" id="contact-form-subject" placeholder="Objet du message" value="Je souhaite connaître les enfants en attente de parrainage" required>
                        <div class="invalid-feedback">
                            Aidez-nous à traiter plus rapidement votre message en ajoutant un objet clair et précis.
                        </div>
                    </div>
                    <!-- Form group for the message content -->
                    <div class="form-group">
                        <label for="contact-form-message">Message <span class="vhmavi-required-field">*</span></label>
                        <textarea class="form-control" name="message" id="contact-form-message" placeholder="Entrez le contenu de votre message..." rows="6" required></textarea>
                    </div>
                    <!--
                        Form group to receive a copy of this mail or not
                        If checked, the user will receive a mail on its email address containing this message
                    -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="sendCopy" type="checkbox" value="" id="contact-form-send-copy">
                            <label class="form-check-label" for="contact-form-send-copy">
                                M'envoyer une copie de mon message par mail
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <small class="form-text vhmavi-required-field">
                            * Champs requis
                        </small>
                    </div>
                    <!-- The reCAPTACHA V2 -->
                    <div id="vhmavi-recaptcha-container"></div>
                    <!-- The click on the send button is catched in the JS corresponding file -->
                    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
                        Envoyer
                    </button>
                    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Envoi en cours...
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer include -->
    <?php include("components/vhmavi-footer/vhmavi-footer.php"); ?>

    <!-- Bootstrap and JQuery script loader include -->
    <?php include("includes/script-loader.php"); ?>

    <!--
        Specific script loading
        We use type module because the script acts as a module
        It loads other JS files using import
    -->
    <script src="js/contact.js" type="module"></script>
</body>
</html>
