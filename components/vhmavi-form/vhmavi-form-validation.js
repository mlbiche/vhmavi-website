/**
 * vhmavi-form-validation.js
 * Provide the validation process of a form
 */

export let validators = {};
export let validatorsParameters = {};

let validityStates = {};

/**
 * Initialise the validity state array
 */
export function initValidityState() {
    $('.vhmavi-form').find('input, textarea').each(function() {
        const inputId = $(this).attr('id');

        validityStates[inputId] = isInputValid($(this));
    });
}

/**
 * Subscribe to inputs change event so they are validated as the user type
 */
export function inputsValidationSubscribe() {
    $('.vhmavi-form').find('input, textarea, select').on('input', function() {
        validateInput($(this));
    });
    $('.vhmavi-form').find('input, textarea, select').change(function() {
        validateInput($(this));
    });
}

/**
 * Check if the form is valid or not
 * @returns True if the form is valid ; false otherwise
 */
export function isFormValid() {
    let isValid = true;

    // Checks that all the input are valid
    for (const validityState of Object.keys(validityStates)) {
        // If an input is invalid, the form is invalid
        if (!validityStates[validityState])
            isValid = false;
    }

    return isValid;
}

/**
 * Validate the input that just changed
 * @param $inputJqEl The input that just changes (JQuery Element)
 */
function validateInput($inputJqEl) {
    const inputId = $inputJqEl.attr('id');

    // Check if the input is valid or not
    if (isInputValid($inputJqEl)) {
        // The input is valid so we change its state
        validityStates[inputId] = true;
        setValidInput($inputJqEl);
    } else {
        // The input is invalid so we change its state
        validityStates[inputId] = false;
        setInvalidInput($inputJqEl);
    }

    const $submitButtonJqEl = $inputJqEl.parents('.vhmavi-form').children('.vhmavi-submit-btn');

    // Check if the form is valid and the submit button is disabled
    if (isFormValid() && $submitButtonJqEl.is(':disabled')) {
        // Enable the submit button
        $submitButtonJqEl.prop('disabled', false);
    }

    // Check if the form is invalid and the submit button is enabled
    if (!isFormValid() && !$submitButtonJqEl.is(':disabled')) {
        // Disable the submit button
        $submitButtonJqEl.prop('disabled', true);
    }
}

/**
 * Check if an input is valid or not
 * @param $inputJqEl The input to check (JQuery Element)
 * @returns True if the input is valid ; false otherwise
 */
function isInputValid($inputJqEl) {
    const inputId = $inputJqEl.attr('id');

    const isBuiltInValidatorValid = $inputJqEl[0].checkValidity();
    let isProvidedValidatorValid = true;
    
    // If the input has provided validator, check it
    if (validators[inputId])
        isProvidedValidatorValid = validators[inputId](validatorsParameters[inputId]);

    return isBuiltInValidatorValid && isProvidedValidatorValid;
}

/**
 * Set the input as invalid
 * @param $inputJqEl The input that should be formated as invalid (JQuery Element)
 */
function setInvalidInput($inputJqEl) {
    // Add the is-invalid class to the input so it displays as invalid
    if (!$inputJqEl.hasClass('is-invalid'))
        $inputJqEl.addClass('is-invalid');
}

/**
 * Set the input as valid
 * @param $inputJqEl The JQuery input text that should be formated as valid (JQuery Element)
 */
function setValidInput($inputJqEl) {
    // Remove the is-invalid class from the input so it is no longer displayed as invalid
    if ($inputJqEl.hasClass('is-invalid'))
        $inputJqEl.removeClass('is-invalid');
}