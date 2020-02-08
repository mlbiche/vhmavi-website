<?php
    /**
     * recaptcha_validation.php
     * This file process the server-side reCAPTCHA validation.
     */

    include('read_config.php');

    if (!empty($_POST['gReCAPTCHAResponse'])) {
        // Load the reCAPTCHA config
        $reCAPTCHAConfig = readConfig('reCAPTCHA');

        // Build the URL with parameters
        $verificationURLWithParameters = $reCAPTCHAConfig['apiVerificationURL']
                                            . '?secret=' . $reCAPTCHAConfig['secretKey']
                                            . '&response=' . $_POST['gReCAPTCHAResponse'];

        // Initialise the cURL session
        $curl = curl_init($verificationURLWithParameters);
    
        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'content-type: application/json',
                'content-length: 0'
            )
        ));
    
        // Send the request and decode the JSON result
        $response = json_decode(curl_exec($curl), true);
    
        // Get the returned error if there any
        $err = curl_error($curl);
    
        // Close the cURL session
        curl_close($curl);

        if ($err) {
            /**
             * There is a server or implementation error. The user has to retry later.
             */
            echo json_encode(array(
                'success' => false,
                'failure-reason' => 'recaptcha-validation-error'
            ));

            return;
        }
        
        if (!$response['success']) {
            foreach ($response['error-codes'] as $errorCode) {
                switch ($errorCode) {
                    case 'timeout-or-duplicate':
                        /**
                         * This is a reCAPTCHA error because of bad user behaviour.
                         * The reCAPTCHA needs to be reloaded.
                         */
                        echo json_encode(array(
                            'success' => false,
                            'failure-reason' => 'recaptcha-validation-timeout-or-duplicate'
                        ));
                        return;
                }
            }

            /**
             * If the error codes are different from timeout of duplicate, it is an
             * implementation error. The user has to retry later.
             */

            echo json_encode(array(
                'success' => false,
                'failure-reason' => 'recaptcha-validation-error'
            ));

            return;
        }

        // The script return the final code stored in done, encoded in JSON
        echo json_encode(array('success' => true));
    }
?>