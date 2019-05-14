/**
 * vhmavi-form-submission.js
 * Provide the submission process of a form
 */

/**
 * Subscribe to the form submission event
 * It realises the asynchronous submission process in the callback
 * All the validations are already done as the user is typing
 * @param postService The post service url
 * @param initValidityState The validatity state initialisation function
 *                          It is the function from vhmavi-form-validation.js
 * @param isFormValid The form validity check function
 *                    It is the function from vhmavi-form-validation.js
 * @returns It returns false to prevent the page reloading
 */
export function formSubmissionSubscribe(postService, initValidityState, isFormValid) {
    /**
     * When the submit button is clicked, check the form validity and submit the form asynchronously using AJAX
     * At this point, the submit button is enabled
     */
    $(document).on('click', '.vhmavi-submit-btn', function() {
        // this is the send button. The parent is the form (HTML Element)
        const $formHTMLEl = $(this).parent()[0];

        // Hide all the alerts
        $('.vhmavi-form-alert-success').hide();
        $('.vhmavi-form-alert-danger').hide();
        $('.vhmavi-form-alert-danger-newsletter').hide();
        
        // Switch the submit button to the submitting spinner button
        $(this).hide();
        $('.vhmavi-submitting-spinner-btn').show();

        // Check if the form is valid. It occurs when the user remove the disable property from the button
        if (!isFormValid()) {
            // Reinitialise the form
            fullReinitForm(initValidityState, $formHTMLEl);

            return false;
        }

        // We send the form
        $.post({
            url: postService,
            data: new FormData($formHTMLEl),
            success: (data) => {
                // On success handler
                if (data.done) {
                    // The email has been properly sent so we show the success alert
                    $('.vhmavi-form-alert-success').show();
                    
                    // Reinitialise the form
                    fullReinitForm(initValidityState, $formHTMLEl);

                    if (data.newsletterSubscriptionFailed) {
                        // The newsletter subscription has failed so we show a special danger alert
                        $('.vhmavi-form-alert-danger-newsletter').show();
                    }
                } else {
                    // In case of failure, we show the danger alert
                    $('.vhmavi-form-alert-danger').show();

                    // Reinitialise the form
                    basicReinitForm(initValidityState, $formHTMLEl);
                }
            },
            dataType: 'json',
            processData: false,
            contentType: false
        }).fail(() => {
            // In case of failure, we show the danger alert
            $('.vhmavi-form-alert-danger').show();
            
            // Reinitialise the form
            basicReinitForm(initValidityState, $formHTMLEl);
        });

        // We return false to prevent the page reload
        return false;
    });
}

/**
 * Reinitialise the form with its fields and the submit button
 * It is used when the submit is successful or when the form is submitted while it
 * is invalid
 * @param initValidityState The validatity state initialisation function
 *                          It is the function from vhmavi-form-validation.js
 * @param $formHTMLEl The form HTML element
 */
function fullReinitForm(initValidityState, $formHTMLEl) {
    // Empty the form controls
    $('.form-control').val('');
    $('.form-check-input').prop('checked', false);

    // Remove the file input validation if there is any
    $('.vhmavi-file-input').children('.vhmavi-file-input-text').removeClass('is-valid');

    // Disable the submit button
    $('.vhmavi-submit-btn').prop('disabled', true);

    // Apply the common form reinitialisation
    basicReinitForm(initValidityState, $formHTMLEl);
}

/**
 * Reinitialise the common form elements
 * @param initValidityState The validatity state initialisation function
 *                          It is the function from vhmavi-form-validation.js
 * @param $formHTMLEl The form HTML element
 */
function basicReinitForm(initValidityState, $formHTMLEl) {
    // Replace the spinner button with the send button 
    $('.vhmavi-submitting-spinner-btn').hide();
    $('.vhmavi-submit-btn').show();

    // Scroll to the top of the window
    $(window).scrollTop($($formHTMLEl).offset().top - 100);

    // Initialise the form validity state
    initValidityState()
}