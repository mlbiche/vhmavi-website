/**
 * vhmavi-post-code-input.js
 * Provide the validation of a post code input
 */

/**
 * Validate the post code input
 * @param param0 The parameters array - none is needed so it is an empty array
 * @returns True if the post code input is valid ; false otherwise
 */
export function postCodeInputValidator([]) {
    const postCodeValue = $('#donation-sponsor-form-post-code').val();

    // Check that the post code contains only digits
    if (/^\d+$/.test(postCodeValue))
        return true;

    return false;
}
