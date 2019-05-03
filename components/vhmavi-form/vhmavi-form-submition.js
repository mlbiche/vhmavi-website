/**
 * vhmavi-form-submition.js
 * Provide the submition process of a form
 */

/**
 * Subscribe to the form submition event
 * It realises the asynchronous submition process in the callback
 * All the validations are already done as the user is typing
 * @param postService The post service url
 * @returns It returns false to prevent the page reloading
 */
export function formSubmitionSubscribe(postService) {
    // When the submit button is clicked, check the form validity and submit the form asynchronously using AJAX
    $(document).on('click', '.vhmavi-submit-btn', function() {
        // this is the send button. The parent is the form (HTML Element)
        const $formHTMLEl = $(this).parent()[0];

        // Hide all the alerts
        $('.vhmavi-form-alert-success').hide();
        $('.vhmavi-form-alert-danger').hide();
        $('.vhmavi-form-alert-danger-newsletter').hide();
        

        // Switch the submit button to the submitting spinner button
        $('.vhmavi-submit-btn').hide();
        $('.vhmavi-submitting-spinner-btn').show();

        // We send the form
        $.post({
            url: postService,
            data: new FormData($formHTMLEl),
            success: (data) => {
                // On success handler
                if (data.done) {
                    // The email has been properly sent so we show the success alert
                    $('.vhmavi-form-alert-success').show();

                    // Empty the form controls
                    $('.form-control').val('');
                    $('.form-check-input').prop('checked', false);

                    // Remove the file input validation if there is any
                    $('.vhmavi-file-input').children('.vhmavi-file-input-text').removeClass('is-valid');

                    if (data.newsletterSubscriptionFailed) {
                        // The newsletter subscription has failed so we show a special danger alert
                        $('.vhmavi-form-alert-danger-newsletter').show();
                    }
                } else {
                    // In case of failure, we show the danger alert
                    $('.vhmavi-form-alert-danger').show();
                }
            },
            dataType: 'json',
            processData: false,
            contentType: false
        }).fail(() => {
            // In case of failure, we show the danger alert
            $('.vhmavi-form-alert-danger').show();
        })
        .always(() => {
            /**
             * On success or failure, replace the spinner button with the send button enabled and scroll
             * to the top of the window
             */
            $('.vhmavi-submitting-spinner-btn').hide();
            $(this).show();
            $(this).prop('disabled', true);

            console.log(this);

            $(window).scrollTop($($formHTMLEl).offset().top - 100);
        });

        // We return false to prevent the page reload
        return false;
    });
}