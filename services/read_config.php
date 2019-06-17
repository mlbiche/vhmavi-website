<?php
    /**
     * read_config.php
     * This file provide a function for reading a config.
     */

    /**
     * Read the config file and return the decoded config corresponding to the provided
     * config name.
     * @param $configName The config to extract
     * @return The corresponding config
     */
    function readConfig($configName) {
        // Get the config file content
        $configFileContent = file_get_contents('../config/config.json');

        // Decode the config file
        $configJSON = json_decode($configFileContent, true);

        return $configJSON[$configName];
    }
?>