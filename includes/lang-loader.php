<?php
    /**
     * Parse the Accept-Language parameter from the HTTP header and select the best matching language
     * @return The selected language code
     */
    function parseAskedLang() {
        // Define the list of accepted languages by the server. The default language is the first one
        $acceptedLangArr = [ 'en', 'fr' ];
        
        // Set the selected language to the default one
        $selectedLang = $acceptedLangArr[0];

        // Remove the white space from the Accept-Language HTTP parameter and split it in an array of languages accepted by the client
        $askedLangWithPriorityArr = explode(',', str_replace(' ', '', $_SERVER['HTTP_ACCEPT_LANGUAGE']));

        // The maximum accepted priority is used to remember
        $maximumAcceptedPriority = 0.0;        

        foreach ($askedLangWithPriorityArr as $askedLangWithPriority) {
            // Split the language from its priority
            $askedLangSplit = explode(';', $askedLangWithPriority);
            
            // Parse the priority. If there is no priority define, it is 1
            $askedLangPriority = 1.0;

            if (count($askedLangSplit) == 2) {
                // A lang priority is defined, so it parses it. It removes the 'q=' and cast it to a float
                $askedLangPriority = (float) str_replace('q=', '', $askedLangSplit[1]);
            }

            // If the lang priority is lower than the already selected language priority, we ignore this language
            if ($askedLangPriority <= $maximumAcceptedPriority)
                continue;

            // Parse the primary lang and remove any capital letter
            $langPrimaryTag = strtolower(substr($askedLangSplit[0], 0, 2));

            if (in_array($langPrimaryTag, $acceptedLangArr)) {
                $selectedLang = $langPrimaryTag;
                $maximumAcceptedPriority = $askedLangPriority;
            }
        }

        return $selectedLang;
    }

    /**
     * Return the language file corresponding to the lang code
     * @param $lang The lang code
     * @return The language file path
     */
    function getLangFile($lang) {
        return 'lang/' . $lang . '.php';
    }
?>