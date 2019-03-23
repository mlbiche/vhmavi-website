/**
 * vhmavi-postal-code-input.js
 * Provide the validation of a postal code input
 */

/**
 * Validate the postal code input
 * @param param0 The parameters array - none is needed so it is an empty array
 * @returns True if the postal code input is valid ; false otherwise
 */
export function postalCodeInputValidator([]) {
    const postalCodeValue = $('#donation-sponsor-form-postal-code').val();

    // Check that the postal code contains only digits
    if (/^\d+$/.test(postalCodeValue))
        return true;

    return false;
}
