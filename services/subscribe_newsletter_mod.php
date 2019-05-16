<?php
    /**
     * subscribe_newsletter_mod.php
     * This file provide a function that process the subscription to the newsletter.
     */

    /**
     * Subscribe a user to the school newsletter
     * @param $email The user email to subscribe
     * @param $firstName The user first name
     * @param $lastName The user last name
     * @param $listId The contact list to which we add the user
     * @return 1 if the subscription has failed ; 0 otherwise
     */
    function subscribeNewsletter($email, $firstName, $lastName, $listId) {
        // Load the SendInBlue Api config
        $sendInBlueApiConfig = loadSendInBlueAPIConfig();

        // Initialise the cURL session
        $curl = curl_init($sendInBlueApiConfig['apiURL'] . 'contacts');

        // Prepare the body
        $body = array(
            'email' => $email,
            'attributes' => array(
                'FIRSTNAME' => $firstName,
                'LASTNAME' => $lastName
            ),
            'listIds' => [ $listId ]
        );

        $bodyString = json_encode($body);

        // Set the cURL options
        curl_setopt_array($curl, array(
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $bodyString,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'content-type: application/json',
                'api-key: ' . $sendInBlueApiConfig['apiKey']
            )
        ));

        // Send the request
        $response = curl_exec($curl);

        // Get the returned error if there any
        $err = curl_error($curl);

        // Close the cURL session
        curl_close($curl);

        if ($err)
            return 1;
        else {
            // Decode the JSON response
            $response_obj = json_decode($response);

            /**
             * Check that the response is correctly formated
             * It should contain the id of the newly created contact
             */
            if (isset($response_obj->id))
                return 0;
            else {
                // No error code. Unexpected result
                if (!isset($response_obj->code))
                    return 1;

                /**
                 * The contact was already in the contact list
                 * It hasn't been add again and SendInblue notice us about it
                 * It is an acceptable situation
                 */
                if ($response_obj->code === 'duplicate_parameter')
                    return 0;

                // Other error
                return 1;
            }
        }
    }

    /**
     * Read the config file to get the SendInBlue API config
     * @return The SendInBlue API config
     */
    function loadSendInBlueAPIConfig() {
        // Get the config file content
        $configFileContent = file_get_contents('../config/config.json');

        // Decode the config file
        $configJSON = json_decode($configFileContent, true);

        return $configJSON['sendInBlueApi'];
    }
?>