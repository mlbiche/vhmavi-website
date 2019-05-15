<?php
    /**
     * subscribe_newsletter.php
     * This file process the server-side form submission from news.php.
     */

    include("subscribe_newsletter_mod.php");

    /**
     * Called as POST HTTP request
     * It happens when the newsletter subscription form has been submitted in the form.js AJAX
     * request initialised by news-newsletter-form.js
     * It subscribes the user to the newsletter
     */
    
    // The done variable is used to check that the subscription was successfully done or not
    $done = 0;
    
    /**
     * Check that all the form input that are required are provided and that the email input is
     * an email
     */
    if (!empty($_POST['firstName']) && !empty($_POST['lastName'])
            // Check the validity of the email
            && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $done = !subscribeNewsletter($_POST['email'], $_POST['firstName'], $_POST['lastName'], 2);

    // The script return the final code stored in done, encoded in JSON
    echo json_encode(array('done' => $done));
?>