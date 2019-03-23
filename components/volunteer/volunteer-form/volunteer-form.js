import {
    fileInputChangeSubscription,
    fileInputValidator
} from '../..//vhmavi-file-input/vhmavi-file-input.js';
import {
    initValidityState,
    inputsValidationSubscribe,
    validators,
    validatorsParameters,
    formSubmitionSubscribe
} from '../../vhmavi-form/vhmavi-form.js';

// Subscribe to the file input event
fileInputChangeSubscription('#volunteer-form-cv-container', [ 'application/pdf' ]);

// Add the file input validator to the form
validators['volunteer-form-cv-file'] = fileInputValidator;
validatorsParameters['volunteer-form-cv-file'] = ['#volunteer-form-cv-container', true, [ 'application/pdf' ]];

// Initialise the validity state array once the document is ready
initValidityState();

// Subscribe to the input validation on change
inputsValidationSubscribe();

// Subscribe to the form submition event
formSubmitionSubscribe('services/volunteer_application.php');