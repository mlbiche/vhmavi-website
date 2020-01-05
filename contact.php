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
    
    <title><?php echo $lang['contact-title']; ?></title>
    
    <!-- Meta description for SEO -->
    <meta name="description" content="<?php echo $lang['contact-metaDescription']; ?>" />

    <!-- Canonical link to reference the master copy of the URL to SEO -->
    <link rel="canonical" href="http://vhmavi.edu.np/contact.php" /> 

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
                <h1><?php echo $lang['contact-paragraph1Header']; ?></h1>
                <p><?php echo $lang['contact-paragraph1Text1']; ?></p>
                <p><?php echo $lang['contact-paragraph1Text2']; ?></p>
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
                        <?php echo $lang['contact-contactFormAlertSuccess']; ?>
                    </div>
                    <!-- Display an alert for email sent failure -->
                    <div class="alert alert-danger vhmavi-form-alert-danger" role="alert">
                        <?php echo $lang['contact-contactFormAlertDanger']; ?>
                    </div>

                    <!-- Form group for first name -->
                    <div class="form-group">
                        <!--
                            The text written above the text box is the label
                            It needs to refer to the input thanks to the for field corresponding to the input id
                        -->
                        <label for="contact-form-first-name"><?php echo $lang['contact-contactFormFirstNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
                        <!--
                            This field is required
                            The placeholder is the displayed text within the empty input
                            The name is used to identify parameters in the POST HTTP request when the form is submitted
                            This is this name that is used to access each submitted value
                        -->
                        <input type="text" class="form-control" name="firstName" id="contact-form-first-name" placeholder="<?php echo $lang['contact-contactFormFirstNamePlaceholder']; ?>" required>
                        <!-- The invalid feedback text is displayed when the form is submitted and is not validated -->
                        <div class="invalid-feedback">
                            <?php echo $lang['contact-contactFormFirstNameFeedback']; ?>
                        </div>
                    </div>
                    <!-- Form group for last name -->
                    <div class="form-group">
                        <label for="contact-form-last-name"><?php echo $lang['contact-contactFormLastNameLabel']; ?> <span class="vhmavi-required-field">*</span></label>
                        <input type="text" class="form-control" name="lastName" id="contact-form-last-name" placeholder="<?php echo $lang['contact-contactFormLastNamePlaceholder']; ?>" required>
                        <div class="invalid-feedback">
                            <?php echo $lang['contact-contactFormLastNameFeedback']; ?>
                        </div>
                    </div>
                    <!-- Form group for email address -->
                    <div class="form-group">
                        <label for="contact-form-email"><?php echo $lang['contact-contactFormEmailLabel']; ?> <span class="vhmavi-required-field">*</span></label>
                        <input type="email" class="form-control" name="email" id="contact-form-email" placeholder="<?php echo $lang['contact-contactFormEmailPlaceholder']; ?>" required>
                        <div class="invalid-feedback">
                            <?php echo $lang['contact-contactFormEmailFeedback']; ?>
                        </div>
                    </div>
                    <!-- Form group for subject suggestion -->
                    <div class="form-group">
                        <label for="contact-form-suggested-subject"><?php echo $lang['contact-contactFormSuggestedSubjectLabel']; ?> <span class="vhmavi-required-field">*</span></label>
                        <select class="form-control" name="subject-suggested" id="contact-form-suggested-subject" required>
                            <option value="children-to-sponsor-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption1']; ?></option>
                            <option value="form-issue-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption2']; ?></option>
                            <option value="sponsor-package-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption3']; ?></option>
                            <option value="sponsor-cancellation-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption4']; ?></option>
                            <option value="sponsor-change-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption5']; ?></option>
                            <option value="gear-donation-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption6']; ?></option>
                            <option value="volunteer-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption7']; ?></option>
                            <option value="other-subject"><?php echo $lang['contact-contactFormSuggestedSubjectOption8']; ?></option>
                        </select>
                    </div>
                    <!-- Form group for subject -->
                    <div class="form-group" id="contact-form-group-subject">
                        <label for="contact-form-subject"><?php echo $lang['contact-contactFormObjectLabel']; ?> <span class="vhmavi-required-field">*</span></label>
                        <input class="form-control" name="subject" id="contact-form-subject" placeholder="<?php echo $lang['contact-contactFormSubjectPlaceholder']; ?>" value="Je souhaite connaître les enfants en attente de parrainage" required>
                        <div class="invalid-feedback">
                            <?php echo $lang['contact-contactFormSubjectFeedback']; ?>
                        </div>
                    </div>
                    <!-- Form group for the message content -->
                    <div class="form-group">
                        <label for="contact-form-message"><?php echo $lang['contact-contactFormMessageLabel']; ?> <span class="vhmavi-required-field">*</span></label>
                        <textarea class="form-control" name="message" id="contact-form-message" placeholder="<?php echo $lang['contact-contactFormMessagePlaceholder']; ?>" rows="6" required></textarea>
                        <div class="invalid-feedback">
                            <?php echo $lang['contact-contactFormMessageFeedback']; ?>
                        </div>
                    </div>
                    <!--
                        Form group to receive a copy of this mail or not
                        If checked, the user will receive a mail on its email address containing this message
                    -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" name="sendCopy" type="checkbox" value="" id="contact-form-send-copy">
                            <label class="form-check-label" for="contact-form-send-copy">
                                <?php echo $lang['contact-contactFormSendCopyLabel']; ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <small class="form-text vhmavi-required-field">
                            * <?php echo $lang['contact-contactFormRequiredFields']; ?>
                        </small>
                    </div>
                    <!-- The reCAPTACHA V2 -->
                    <div id="vhmavi-recaptcha-container"></div>
                    <!-- The click on the send button is catched in the JS corresponding file -->
                    <button class="btn btn-outline-vhmavi vhmavi-submit-btn" type="submit" disabled>
                        <?php echo $lang['contact-contactFormSend']; ?>
                    </button>
                    <button class="btn btn-outline-vhmavi vhmavi-submitting-spinner-btn" type="submit" disabled> 
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        <?php echo $lang['contact-contactFormSending']; ?>
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
