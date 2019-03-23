// On click on an option
$('.vhmavi-sponsoring-option').click(function() {
    // If the option is already selected, ignore the action
    if ($(this).hasClass('vhmavi-sponsoring-option-selected'))
        return;

    const $alreadySelectedOptionJqEl = $('.vhmavi-sponsoring-option.vhmavi-sponsoring-option-selected');

    // Remove the selection state from the already selected option
    $alreadySelectedOptionJqEl.removeClass('vhmavi-sponsoring-option-selected');

    // If the already selected option is the project option
    if ($alreadySelectedOptionJqEl.attr('id') == 'donation-sponsor-option-project') {
        // Hide the amount input
        $('.vhmavi-amount-input').hide();

        // Remove the required attribute to the amount input
        $('#donation-sponsor-form-project-amount').prop('required', false);
    
        // Trigger the change event for the form validation as its validators has changed
        $('#donation-sponsor-form-project-amount').trigger('change');
    }

    // Add the selection state to the new selected option
    $(this).addClass('vhmavi-sponsoring-option-selected');

    // If the new selected option is the project option
    if($(this).attr('id') == 'donation-sponsor-option-project') {
        // Show the amount input
        $('.vhmavi-amount-input').css('display', 'flex');

        // Add the required attribute to the amount input
        $('#donation-sponsor-form-project-amount').prop('required', true);
    
        // Trigger the change event for the form validation as its validators has changed
        $('#donation-sponsor-form-project-amount').trigger('change');

        // Update the total amount
        updateTotalAmountForProject();
    }

    // If the new selected option is the extern option
    if($(this).attr('id') == 'donation-sponsor-option-extern') {
        // Update the total amount
        updateTotalAmount(25, true);
    }

    // If the new selected option is the half intern option
    if($(this).attr('id') == 'donation-sponsor-option-half-intern') {
        // Update the total amount
        updateTotalAmount(50, true);
    }

    // If the new selected option is the intern option
    if($(this).attr('id') == 'donation-sponsor-option-intern') {
        // Update the total amount
        updateTotalAmount(100, true);
    }

    // Update the selected value in the input
    $('#donation-sponsor-form-sponsoring-option').val($(this).attr('id'));
    
    /**
     * Trigger the change event for the form validation
     * By default, the change event is not raised on input editing with val
     */
    $('#donation-sponsor-form-sponsoring-option').trigger('change');
});

// On project amount value changing
$('#donation-sponsor-form-project-amount').on('input', function() {
    updateTotalAmountForProject();
});

/**
 * Update the total amount using the project amount input
 */
function updateTotalAmountForProject() {
    const totalAmount = $('#donation-sponsor-form-project-amount').val();

    updateTotalAmount(totalAmount, false);
}

/**
 * Update the total amount in the label and the input
 * @param totalAmount The new total amount
 * @param eachMonth Boolean used to hide or show the each month label
 */
function updateTotalAmount(totalAmount, eachMonth) {
    // Update the total amount in the label
    $('#donation-sponsor-form-total-amount-lab').text(totalAmount);

    // Update the total amount in the input
    $('#donation-sponsor-form-total-amount-input').val(totalAmount);
    
    /**
     * Trigger the change event for the form validation
     * By default, the change event is not raised on input editing with val
     */
    $('#donation-sponsor-form-total-amount-input').trigger('change');

    // Show or hide the each month label
    if (eachMonth)
        $('#donation-sponsor-form-each-month-lab').show();
    else
        $('#donation-sponsor-form-each-month-lab').hide();
}

/**
 * On script loading we update the total amount to prevent weird behaviour
 * For example, when the page is fast refresh (F5), without this call, the input value
 * and the total amount value can be different
 */
updateTotalAmountForProject();