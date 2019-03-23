<?php
    /**
     * volunteer_application.php
     * This file process the server-side form submition from volunteer.php.
     */

    /**
     * Called as POST HTTP request
     * It happens when the volunteer application form has been submitted in the form.js AJAX
     * request initialised by volunteer.js
     * It sends email
     */

    /**
     * The boundary is used to separate various part within the email
     * Here, it separates the message from the attached CV
     * It is just a hash of a random file
     */
    $boundary = md5("vhmavi.edu.np");
    
    // The done variable is used to check that the email was successfully sent or not
    $done = 0;
    
    // Check that all the form input that are required are provided
    if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['presentation'],
                $_FILES['cv'])) {
        // Read the CV file
        $cv_file = $_FILES['cv'];

        $handle = fopen($cv_file['tmp_name'], "r");
        $content = fread($handle, $cv_file['size']);
        fclose($handle);

        // Encode the CV file
        $encoded_content = chunk_split(base64_encode($content), 70);
        
        $to = "vhmavi@gmail.com";

        // Preparing the subject
        $subject = "vhmavi.edu.np - Nouvelle candidature d'un bénévole : {$_POST['firstName']} {$_POST['lastName']}";

        // Preparing the message content
        $message = "Une nouvelle candidature pour du bénévolat a été faite sur vhmavi.edu.np.

Prénom : {$_POST['firstName']}
Nom : {$_POST['lastName']}
Adresse e-mail : {$_POST['email']}

Présentation du projet : \"{$_POST['presentation']}\"

En prenant contact avec lui, pensez à lui envoyer la fiche de bénévole.\r\n";
// The last new empty line is important to finish this bloc

        /**
         * Preparing the body that contains the encoded message and the encoded attached CV
         * The first part contains the encoded message
         */
        $body = "--$boundary
Content-Type: text/plain; charset=utf-8\r\n\r\n";

        // Add the encoded message
        $body .= wordwrap($message, 70, "\r\n");

        /**
         * Prepare the encoded attached CV part
         */
        $body .= "--$boundary
Content-Type: {$cv_file['type']}; name={$cv_file['name']}
Content-Disposition: attachment; filename={$cv_file['name']}
Content-Transfer-Encoding: base64
X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";

        // Add the encoded attached cv
        $body .= $encoded_content;

        // Preparing the header
        $headers = array(
            'From' => 'Webmaster@vhmavi.edu.np',
            'X-Mailer' => 'PHP/' . phpversion(),
            'Content-Type' => "multipart/mixed; boundary = $boundary"
        );

        // Send the email
        $done = mail($to, $subject, $body, $headers);

        // Send a confirmation mail to the volunteer
        if ($done) {
            $to = $_POST['email'];
            
            // Preparing the subject
            $subject = "VHMaVi - Votre candidature de bénévolat";

            // Preparing the message content
            $message = "Nous confirmons l'envoi de votre candidature de bénévolat sur notre site.

Prénom : {$_POST['firstName']}
Nom : {$_POST['lastName']}
Adresse e-mail : {$_POST['email']}

Présentation du projet : \"{$_POST['presentation']}\"

Nous vous recontacterons dans les plus bref délais après avoir pris connaissance de votre candidature.";
            // The max lenght for a line in a mail is 70 characters so we cut longer lines
            $message = wordwrap($message, 70, "\r\n");

            $headers = array(
                'From' => 'Webmaster@vhmavi.edu.np',
                'X-Mailer' => 'PHP/' . phpversion()
            );

            // Send the confirmation email
            mail($to, $subject, $message, $headers);
        }
    }

    // The script return the final code stored in done, encoded in JSON
    echo json_encode(array('done' => $done));
?>