<?php
    /**
     * send_mail.php
     * This file process the server-side form submission from contact.php.
     */

    /**
     * Called as POST HTTP request
     * It happens when the contact form has been submitted in the form.js AJAX
     * request initialised by contact.js
     * It sends email
     */
    
    // The done variable is used to check that the email was successfully sent or not
    $done = 0;
    
    // Check that all the form input that are required are provided and that the email input is an email
    if (!empty($_POST['firstName']) && !empty($_POST['lastName'])
            // Check the validity of the email
            && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['subject']) && !empty($_POST['message'])) {
        $to = 'vhmavi@gmail.com';

        // Preparing the subject
        $subject = "vhmavi.edu.np - Nouveau message : \"{$_POST['subject']}\"";

        // Preparing the message content
        $message = "Vous avez reçu un nouveau message depuis le formulaire de contact du site vhmavi.edu.np.

Prénom : {$_POST['firstName']}
Nom : {$_POST['lastName']}
Adresse e-mail : {$_POST['email']}

Objet : {$_POST['subject']}

Message : \"{$_POST['message']}\"";

        $headers = array(
            'From' => 'Webmaster@vhmavi.edu.np',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        // The max lenght for a line in a mail is 70 characters so we cut longer lines
        $message = wordwrap($message, 70, '\r\n');

        // Send the email
        $done = mail($to, $subject, $message, $headers);

        // If the user as checked he want a copy
        if ($done && isset($_POST['sendCopy'])) {
            $to = $_POST['email'];
            
            // Preparing the subject
            $subject = "VHMaVi - Votre message : \"{$_POST['subject']}\"";

            // Preparing the message content
            $message = "Nous confirmons l'envoi de votre message depuis le formulaire de contact de notre site.

Prénom : {$_POST['firstName']}
Nom : {$_POST['lastName']}
Adresse e-mail : {$_POST['email']}

Objet : {$_POST['subject']}

Message : \"{$_POST['message']}\"

Nous vous répondrons dans les plus brefs délais.";
            // The max lenght for a line in a mail is 70 characters so we cut longer lines
            $message = wordwrap($message, 70, '\r\n');

            // Send the copy email
            mail($to, $subject, $message, $headers);
        }
    }

    // The script return the final code stored in done, encoded in JSON
    echo json_encode(array('done' => $done));
?>