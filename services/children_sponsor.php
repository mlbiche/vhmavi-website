<?php
    /**
     * children_sponsor.php
     * This file process the server-side form submission from donation-sponsor.php.
     */
    
    include('subscribe_newsletter_mod.php');

    /**
     * Called as POST HTTP request
     * It happens when the children sponsor form has been submitted in the form.js AJAX
     * request initialised by donation-sponsor-form.js
     * It sends confirmation email and subscribes the user to the newsletter if needed
     */
    
    // The done variable is used to check that the email was successfully sent or not
    $done = 0;
    $newsletterSubscriptionFailed = 1;

    /**
     * Check that all the form input that are required are provided, that the email input is an email,
     * that the phone input is a phone number, that the postal code input is a postal code
     */
    if (((!empty($_POST['firstName']) && !empty($_POST['lastName']))
                xor (!empty($_POST['associationName']) && !empty($_POST['associationFirstName'])
                        && !empty($_POST['associationLastName'])))
            // Check the validity of the email
            && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
            // Check the validity of the phone
            && !empty($_POST['phone']) && strlen($_POST['phone']) == 10 && ctype_digit($_POST['phone'])
            && !empty($_POST['address'])
            // Check the validity of the postal code
            && !empty($_POST['postalCode']) && ctype_digit($_POST['postalCode'])
            && !empty($_POST['city']) && !empty($_POST['sponsoringOption'])
            && !empty($_POST['totalAmount']) && ctype_digit($_POST['totalAmount'])) {
        $to = 'vhmavi@gmail.com';

        // Preparing the subject
        $subject = 'vhmavi.edu.np - Nouveau ';
        
        if ($_POST['sponsoringOption'] == 'donation-sponsor-option-project')
            $subject .= 'don';
        else
            $subject .= 'parrainage';


        // Preparing the message content
        $message = 'Vous avez reçu un nouveau ';
        
        if ($_POST['sponsoringOption'] == 'donation-sponsor-option-project')
            $message .= 'don';
        else
            $message .= 'parrainage';

        $message .= ' depuis le formulaire de don et parrainage du site vhmavi.edu.np.\r\n\r\n';

        // Adapt the message content to a person or an association
        if ($_POST['firstName'] !== '' &&  $_POST['lastName'] !== '') {
            $message .= "Prénom : {$_POST['firstName']}
Nom : {$_POST['lastName']}";
        } elseif ($_POST['associationName'] !== '' && $_POST['associationFirstName'] !== ''
                    && $_POST['associationLastName'] !== '') {
            $message .= "Nom de l'association : {$_POST['associationName']}
Prénom du responsable : {$_POST['associationFirstName']}
Nom du responsable : {$_POST['associationLastName']}";
        }

        $message .= "\r\nAdresse e-mail : {$_POST['email']}
Téléphone : {$_POST['phone']}
Adresse : {$_POST['address']}
Code postal : {$_POST['postalCode']}
Ville : {$_POST['city']}

Type de don/parrainage : ";

        // Add the sponsoring option
        switch ($_POST['sponsoringOption']) {
            case 'donation-sponsor-option-project':
                $message .= 'Projet/Don ponctuel';
                break;
            case 'donation-sponsor-option-extern':
                $message .= 'Parrainage Externe';
                break;
            case 'donation-sponsor-option-half-intern':
                $message .= 'Parrainage Interne 50%';
                break;
            case 'donation-sponsor-option-intern':
                $message .= 'Parrainage Interne 100%';
                break;
        }

        $message .= "\r\nMontant total : {$_POST['totalAmount']}€";

        // For children sponsor, add a "each-month" text
        if ($_POST['sponsoringOption'] != 'donation-sponsor-option-project')
            $message .= '/mois';

        $message .= '\r\n\r\nMerci de prendre contact avec cette personne pour lui transmettre les coordonnées bancaires.';

        $headers = array(
            'From' => 'Webmaster@vhmavi.edu.np',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        // The max lenght for a line in a mail is 70 characters so we cut longer lines
        $message = wordwrap($message, 70, '\r\n');

        // Send the email
        $done = mail($to, $subject, $message, $headers);

        // Send a confirmation mail to the sponsor
        if ($done) {
            $to = $_POST['email'];
            
            // Preparing the subject
            $subject = 'VHMaVi - Votre ';
        
            if ($_POST['sponsoringOption'] == 'donation-sponsor-option-project')
                $subject .= 'don';
            else
                $subject .= 'parrainage';

            // Preparing the message content
            $message = 'Un immense merci ! Nous confirmons l\'envoi de votre parrainage sur notre site.\r\n\r\n';

            // Adapt the message content to a person or an association
            if ($_POST['firstName'] !== '' &&  $_POST['lastName'] !== '') {
                $message .= "Prénom : {$_POST['firstName']}
Nom : {$_POST['lastName']}";
            } elseif ($_POST['associationName'] !== '' && $_POST['associationFirstName'] !== ''
                        && $_POST['associationLastName'] !== '') {
                $message .= "Nom de l'association : {$_POST['associationName']}
Prénom du responsable : {$_POST['associationFirstName']}
Nom du responsable : {$_POST['associationLastName']}";
            }

            $message .= "\r\nAdresse e-mail : {$_POST['email']}
Téléphone : {$_POST['phone']}
Adresse : {$_POST['address']}
Code postal : {$_POST['postalCode']}
Ville : {$_POST['city']}

Type de don/parrainage : ";

            // Add the sponsoring option
            switch ($_POST['sponsoringOption']) {
                case 'donation-sponsor-option-project':
                    $message .= 'Projet/Don ponctuel';
                    break;
                case 'donation-sponsor-option-extern':
                    $message .= 'Parrainage Externe';
                    break;
                case 'donation-sponsor-option-half-intern':
                    $message .= 'Parrainage Interne 50%';
                    break;
                case 'donation-sponsor-option-intern':
                    $message .= 'Parrainage Interne 100%';
                    break;
            }

            $message .= "\r\nMontant total : {$_POST['totalAmount']}€";

            // For children sponsor, add a "each-month" text
            if ($_POST['sponsoringOption'] != 'donation-sponsor-option-project')
                $message .= '/mois';

            $message .= '\r\n\r\nNous vous transmettrons nos coordonnées bancaires pour finaliser votre aide dans les plus brefs délais.';
            
            // The max lenght for a line in a mail is 70 characters so we cut longer lines
            $message = wordwrap($message, 70, '\r\n');

            // Send the copy email
            mail($to, $subject, $message, $headers);

            /**
             * If the sponsor want to subscribe to the newsletter
             * If the subscription fails, it reinitialise the newsletter subscription failure flag
             * in order to display the newsletter alert...
             */
            if (isset($_POST['subscribeNewsletter'])) {
                if (!empty($_POST['firstName']) &&  !empty($_POST['lastName']))
                    $newsletterSubscriptionFailed= subscribeNewsletter($_POST['email'], $_POST['firstName'], $_POST['lastName'], 3);
                else if (!empty($_POST['associationName']) && empty($_POST['associationFirstName'])
                            && !empty($_POST['associationLastName']))
                    $newsletterSubscriptionFailed = subscribeNewsletter($_POST['email'], $_POST['associationFirstName'],
                                        $_POST['associationLastName'], 3);
            } else {
                $newsletterSubscriptionFailed = 0;
            }
        }
    }

    // The script return the final code stored in done, encoded in JSON
    echo json_encode(array('done' => $done, 'newsletterSubscriptionFailed' => $newsletterSubscriptionFailed));
?>