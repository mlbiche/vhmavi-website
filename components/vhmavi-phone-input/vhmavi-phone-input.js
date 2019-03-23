/**
 * vhmavi-phone-input.js
 * Provide the validation of a phone input
 */


/**
 * Validate the phone input
 * @param param0 The parameters array - none is needed so it is an empty array
 * @returns True if the phone input is valid ; false otherwise
 */
export function phoneInputValidator([]) {
    const phoneValue = $('#donation-sponsor-form-phone').val();

    // Check that the phone number contains 10 digits
    if (phoneValue.length == 10 && /^\d+$/.test(phoneValue))
        return true;

    return false;
}
