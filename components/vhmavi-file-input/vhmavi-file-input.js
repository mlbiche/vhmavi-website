/**
 * vhmavi-file-input.js
 * Provide the behaviour of file input
 */

 /**
 * Add event listenners on the file input and its button
 * The callback for the button click opens the browser from the file input
 * The callback for the file input change validates the file
 * @param fileInputContainerSelector The file input container selector
 * @param extensionList The allowed extension list
 */
export function fileInputChangeSubscription(fileInputContainerSelector, extensionList) {
    const $fileInputContainerJqEl = $(fileInputContainerSelector);

    // Select the file input from the form control
    const $fileInputJqEl = $fileInputContainerJqEl.children('input:file');
    // Select its associated button
    const $fileInputBtnJqEl = $fileInputContainerJqEl.children('.vhmavi-file-input-btn');
    // Select its associated text input for invalid display
    const $fileInputTextJqEl = $fileInputContainerJqEl.children('input:text');

    // On file input button clicked
    $fileInputBtnJqEl.on('click', function() {
        // We open the file browser
        $fileInputJqEl.click();

        // We return false to prevent the form submission
        return false;
    });

    // On file selected
    $fileInputJqEl.change(function() {
        let isAllowedExtension = false;

        // Check that the selected file has an allowed extension
        extensionList.forEach(extension => {
            if ($(this).prop('files')[0].type == extension)
                isAllowedExtension = true;
        });

        if (!isAllowedExtension) {
            setInvalidFileInput($(this), $fileInputTextJqEl, $fileInputContainerJqEl);

            return;
        } 
        
        // A PDF file has been selected so we set the file input as valid
        setValidFileInput($fileInputTextJqEl, $fileInputContainerJqEl);

        // Add the file name to the input text
        $fileInputTextJqEl.val($(this).prop('files')[0].name);
    });
}

/**
 * Validate the file input
 * @param fileInputContainerSelector The file input container selector
 * @param required True if the file input is required for the form validation or not
 * @param extensionList The allowed extension list
 * @returns True if the file input is valid ; false otherwise
 */
export function fileInputValidator([fileInputContainerSelector, required, extensionList]) {
    let isAllowedExtension = false;
    const $fileInputContainerJqEl = $(fileInputContainerSelector);

    // Select the file input from the form control
    const $fileInputJqEl = $fileInputContainerJqEl.children('input:file');

    // Check that a file is selected
    if (required && $fileInputJqEl.prop('files').length == 0) {
        // The file input is invalid
        return false;
    }

    // Set that the input has the allowed extension if no extension is required
    if (extensionList.length == 0) {
        isAllowedExtension = true;
    } else {
        // Check that the selected file has an allowed extension
        extensionList.forEach(extension => {
            if ($fileInputJqEl.prop('files')[0].type == extension)
                isAllowedExtension = true;
        });
    }

    return isAllowedExtension;
}

/**
 * Set the file input as invalid
 * @param $fileInputJqEl The file input that should be emptied (JQuery Element)
 * @param $fileInputTextJqEl The file input text that should be formated as invalid (JQuery Element)
 * @param $fileInputContainerJqEl The file input container to set invalid in order to display invalid feedback (JQuery Element)
 */
function setInvalidFileInput($fileInputJqEl, $fileInputTextJqEl, $fileInputContainerJqEl) {
    // Remove the valid class on the input text if it has
    if ($fileInputTextJqEl.hasClass('is-valid')) 
        $fileInputTextJqEl.removeClass('is-valid');

    // Add the invalid class to the input text so it displays as invalid
    $fileInputTextJqEl.addClass('is-invalid');
    // Add the invalid class to the file input container so the invalid feedback appears
    $fileInputContainerJqEl.addClass('is-invalid');

    // Empty the value in the file input
    $fileInputJqEl.val('');

    // Empty the value in the file input text
    $fileInputTextJqEl.val('');
}

/**
 * Set the file input as valid
 * @param $fileInputTextJqEl The file input text that should be formated as valid (JQuery Element)
 * @param $fileInputContainerJqEl The file input container that should have the is-invalid class removed (JQuery Element)
 */
function setValidFileInput($fileInputTextJqEl, $fileInputContainerJqEl) {
    // Remove the invalid class from the file input container and the input text if it has
    if ($fileInputContainerJqEl.hasClass('is-invalid')) {
        $fileInputContainerJqEl.removeClass('is-invalid');
        $fileInputTextJqEl.removeClass('is-invalid');
    }

    // Add the valid class to the input so it displays as valid
    $fileInputTextJqEl.addClass('is-valid');
}