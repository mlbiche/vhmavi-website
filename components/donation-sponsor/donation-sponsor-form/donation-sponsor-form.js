import { phoneInputValidator } from '../../vhmavi-phone-input/vhmavi-phone-input.js';
import { postalCodeInputValidator } from '../../vhmavi-postal-code-input/vhmavi-postal-code-input.js';
import {
    initValidityState,
    inputsValidationSubscribe,
    validators,
    validatorsParameters,
    formSubmissionSubscribe
} from '../../vhmavi-form/vhmavi-form.js';

// Add the phone input validator to the form
validators['donation-sponsor-form-phone'] = phoneInputValidator;
validatorsParameters['donation-sponsor-form-phone'] = [];

// Add the postal code input validator to the form
validators['donation-sponsor-form-postal-code'] = postalCodeInputValidator;
validatorsParameters['donation-sponsor-form-postal-code'] = [];

// Initialise the validity state array once the document is ready
initValidityState();

// Subscribe to the input validation on change
inputsValidationSubscribe();

// Subscribe to the form submission event, providing the post service
formSubmissionSubscribe('services/children_sponsor.php');

// On person button click
$('#sponsor-type-person').click(function() {
    // Ignores if already selected
    if ($(this).hasClass('vhmavi-btn-group-selected'))
        return;

    invertSelectedButton('#sponsor-type-person', '#sponsor-type-association');

    // We show the first name and the last name fields
    showFormRow('#vhmavi-person-identity');
    
    // We hide the association name, the responsible first name and last name fields
    hideFormRow('#vhmavi-association-identity');
});

// On association button click
$('#sponsor-type-association').click(function() {
    // Ignores if already selected
    if ($(this).hasClass('vhmavi-btn-group-selected'))
        return;

    invertSelectedButton('#sponsor-type-association', '#sponsor-type-person');

    // We show the association name, the responsible first name and last name fields
    showFormRow('#vhmavi-association-identity');
    
    // We hide the first name and the last name fields
    hideFormRow('#vhmavi-person-identity');
});

/**
 * Show a form row and add the required attribute to its input
 * @param selector The form row selector
 */
function showFormRow(selector) {
    // Show the form row
    $(selector).show();
    // Add the required attribute
    $(selector).children().children('input[type=text]').prop('required', true);
    
    // Trigger the change event
    $(selector).children().children('input[type=text]').trigger('change');
}

/**
 * Hide a form row and remove the required attribute to its input
 * @param selector The form row selector
 */
function hideFormRow(selector) {
    // Hide the form row
    $(selector).hide();
    // Remove the required attribute
    $(selector).children().children('input[type=text]').prop('required', false);

    // Trigger the change event
    $(selector).children().children('input[type=text]').trigger('change');
}

/**
 * Switch one button to selected and the other one to unselected
 * @param selectSelector The button to select selector
 * @param unselectSelector The button to unselect selector
 */
function invertSelectedButton(selectSelector, unselectSelector) {
    $(selectSelector).addClass('vhmavi-btn-group-selected');
    $(unselectSelector).removeClass('vhmavi-btn-group-selected');
}